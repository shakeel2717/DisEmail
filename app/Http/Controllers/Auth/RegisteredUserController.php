<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($refer = 'default')
    {
        // checking if this refer is valid
        if ($refer != 'default') {
            $query = User::where('username', $refer)->count();
            if ($query < 1) {
                abort(404);
            }
        }
        return view('auth.register', compact('refer'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'username' => ['required', 'string', 'alpha_num', 'max:255', 'unique:users'],
            'refer' => ['nullable', 'string', 'alpha_num', 'max:255', 'exists:users,username'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $ip = $request->ip();
        // checking if any user with this IP
        $ipSecurity = User::where('ip', $ip)->get();
        if (env('APP_ENV') != "local") {
            if ($ipSecurity->count() > 0) {
                return redirect()->back()->withErrors("You Can't Create Multiple Account on Same IP/Device. Please Contact Support");
            }
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'mobile' => $request->mobile,
            'ip' => $ip,
            'refer' => $request->refer ?? 'default',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        info('Deliver Welcome Balance to:! ' . $user->username);

        // adding new transaction
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->type = "Deposit";
        $transaction->amount = 350;
        $transaction->status = 'approved';
        $transaction->sum = true;
        $transaction->note = "Binance Gateway";
        $transaction->save();

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
