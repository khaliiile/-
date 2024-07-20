<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginPage extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginIn(Request $request){
        $request->validate(
          
            [
            'email' =>'required|email',
            'password' => 'required|'
          ]
        );
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome')->with('success', 'تم تسجيل الخروج بنجاح!');
        }

        return back()->withErrors([
            'email' => 'بيانات الاعتماد هذه غير متطابقة مع سجلاتنا.',
        ]);
    }

        // logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logout successful!');
    }
}
