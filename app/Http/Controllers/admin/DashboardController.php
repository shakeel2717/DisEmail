<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bet;
use App\Models\Tid;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::get();
        $tids = Tid::get();
        $withdraw = Transaction::where('type', 'Withdraw')->get();
        return view('admin.dashboard.index', compact('users', 'tids', 'withdraw'));
    }
}
