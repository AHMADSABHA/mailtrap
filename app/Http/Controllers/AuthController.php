<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home(){
        return view('home1');
    }
    public function login(){
        return view('authentication.sign-in');
    }
    public function authunticate(Request $request){
$request->validate([
    'email'=>['required','email'],
    'password'=>['required'],
]);
if (Auth::attempt([
    'email' => $request->post('email'),
    'password' => $request->post('password'),
])) {
    $request->session()->regenerate();

    return redirect()->intended('plans');
}

return back()->withErrors([
    'email' => 'اسم المستخدم او كلمة المرور غير صحيحة',
])->onlyInput('email');
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}

    }

