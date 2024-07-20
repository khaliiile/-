<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل حساب جديد</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
</head>
<body> 
    
<div class="registration-form">
    <form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="text-center">
            <h1>انشاء حساب</h1>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" name="full_name" placeholder="الاسم الكامل" value="{{ old('full_name') }}" required>
          
        </div>
        <div class="form-group">
            <input type="email" class="form-control item" name="email" placeholder="البريد الإلكتروني" value="{{ old('email') }}" required>
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" name="password" placeholder="كلمة المرور" required>
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
        </div>
        <div class="form-group">
            <label for="role">هل أنت البائع أم المشتري</label>
            <select name="role" class="form-control" required>
                <option value="" disabled selected>يرجى الاختيار</option>
                <option value="buyer" {{ old('role') == 'buyer' ? 'selected' : '' }}>المشتري</option>
                <option value="seller" {{ old('role') == 'seller' ? 'selected' : '' }}>البائع</option>
            </select>
            @error('role')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block create-account">تسجيل</button>
        </div>
        <a href="{{ route('login') }}">لديك حساب بالفعل؟ تسجيل الدخول</a>
    </form>
</div>
</body>
</html>