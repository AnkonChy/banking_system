<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::get();

        return view('pages.index', compact('users'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'account_type' => 'required|in:individual,business',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create([
            'name' => $request->name,
            'account_type' => $request->account_type,
            'email' => $request->email,
            'balance' => 0.0,
            'password' => bcrypt($request->password),
        ]);



        return redirect('/');
    }

    public function login(Request $request)
    {
    }

    public function showTransactionsAndBalance()
    {
    }

    public function showDeposits()
    {
    }

    public function deposit(Request $request)
    {
    }

    public function showWithdrawals()
    {
    }

    public function withdraw(Request $request)
    {
        // Logic to withdraw amount
    }
}
