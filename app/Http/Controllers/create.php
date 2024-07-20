<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class create extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // التحقق من المدخلات
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:buyer,seller',
        ], [
            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل.',
            'password.min' => 'يجب أن تكون كلمة المرور مكونة من 8 أحرف على الأقل.',
            'password.confirmed' => ' كلمة المرور غير متطابقين.',
        ]);
    
        // إنشاء المستخدم الجديد
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    
        // تسجيل الدخول للمستخدم الجديد
        Auth::login($user);
    
        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('welcome')->with('success', 'تم إنشاء الحساب بنجاح!');
    }
}
