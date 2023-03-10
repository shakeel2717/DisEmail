<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Login;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }


    public function autoLogin($username, $password)
    {
        $user = User::where('username', $username)->firstOrFail();
        // checking if this user password is correct
        if (!Hash::check($password, $user->password)) {
            return redirect('/')->withErrors('Incorrect Account Password, Please try again');
        }

        Auth::login($user);

        return redirect()->route('user.dashboard.index');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        try {
            // run your code here
            $login = new Login();
            $login->user_id = auth()->user()->id;
            $login->country = location("geoplugin_countryName");
            $login->city = location("geoplugin_city");
            $login->region = location("geoplugin_region");
            $login->ip = location("ip");
        } finally {
            $login->save();
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
