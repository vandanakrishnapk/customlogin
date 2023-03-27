<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',
        ]);
        User::create([
        'name' => $request->name,
        'email' =>$request->email,
        'password' =>bcrypt($request->password),
        ]);
        return redirect()->route('register');
    }
    public function showlogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dash');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    }
    public function dash()
    {
        return view('dashboard');
    }

}
