<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل حساب جديد</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<header>
  
</header>

<div class="registration-form">
            @if ($errors->any())
                <div class="d-flex justify-content-center">
                    <div class="alert alert-danger d-inline-block p-1">
                        <ul class="list-unstyled m-0">
                            @foreach ($errors->all() as $error)
                                <li class="text-center">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
    <form method="POST" action="{{ route('login') }}">
         <div  class="text-center">  <h1>تسجيل الدخول</h1></div>
        @csrf
      
        <div class="form-group">
            <input type="email" class="form-control item" name="email" placeholder="البريد الإلكتروني" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" name="password" placeholder="كلمة المرور" required>
        </div>
      
        <div class="form-group">
            <button type="submit" class="btn btn-block create-account">تسجيل</button>
        </div>
        <a href="{{ route('create') }}">لديك حساب بالفعل؟ تسجيل الدخول</a>
    </form>
</div>
</body>
</html>
