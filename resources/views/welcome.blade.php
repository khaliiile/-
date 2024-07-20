<!DOCTYPE html>
    <html lang="ar">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/jpeg" href="{{ asset('logo.jpg') }}">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>وسيط الثقة - منصتك الآمنة للبيع والشراء عبر الإنترنت</title>
    </head>
    <body>
    <header>
    <nav class="navbar">
        <div class="logo">وسيط </div>
        <ul class="nav-links">
            <li><a href="#contact">تواصل معنا</a></li>
           
            <li><a href="#services">كيف نعمل</a></li>
            <li><a href="{{ route('welcome') }}">الرئيسية</a></li>
        </ul>
        <div class="container-login">
        @if (Auth::check())
            <!-- If the user is authenticated, show a logout button -->
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="logout-button">تسجيل الخروج</button>
            </form>
        @else
            <!-- If the user is not authenticated, show a login button -->
            <a href="{{ route('login') }}">
                <button class="login-button">تسجيل الدخول</button>
            </a>
        @endif
    </div>
    </nav>
</header>



<div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <h1>وسيطك الموثوق في عالم التجارة الإلكترونية</h1>
            <p class="subtitle">نضمن أمان وسهولة عمليات البيع والشراء عبر الإنترنت</p>
          

            <div class="features">
                <div class="feature-card">
                    <div class="icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h3>حماية مالية كاملة</h3>
                    <p>نحمي أموالك حتى تتم الصفقة بنجاح وترضى عن المنتج أو الخدمة</p>
                </div>
                <div class="feature-card">
                    <div class="icon">
                        <i class="fa-solid fa-message"></i>
                    </div>
                    <h3>تواصل مباشر وآمن</h3>
                    <p>منصة محادثات متكاملة تضمن التواصل السلس بين البائع والمشتري</p>
                </div>
                <div class="feature-card">
                    <div class="icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h3>ضمان الجودة</h3>
                    <p>نتحقق من جودة المنتجات والخدمات قبل إتمام عملية الدفع</p>
                </div>
            </div>
        </div>
            <main id='services'>
                
            <div class="container">
                <h2>كيف تعمل خدمتنا؟</h2>

                <div class="steps">
                    <div class="step">
                        <div class="step-number">4</div>
                        <h3>إتمام الصفقة</h3>
                        <p>بعد موافقة المشتري، يتم تحويل الأموال للبائع</p>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>تسليم المنتج</h3>
                        <p>يقوم البائع بتسليم المنتج أو تقديم الخدمة</p>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>إيداع الأموال</h3>
                        <p>يقوم المشتري بإيداع المبلغ في حساب آمن</p>
                    </div>
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>إنشاء الصفقة</h3>
                        <p>حدد تفاصيل المنتج أو الخدمة والسعر</p>
                    </div>
                </div>

            </main>
        <h2>جاهز لتجربة أكثر أماناً في التجارة الإلكترونية؟</h2>
        @if (Auth::guest())
            <a href="{{ route('create') }}">
            <button class="cta-button">سجل الآن وابدأ المتاجرة بأمان</button>
            </a>
        @endif
         </div>

 
                    <footer id='contact'>
                <div class="footer-content">
                    <div class="footer-section">
                        <h3>وسيط الثقة</h3>
                        <p>نحن نجعل التجارة الإلكترونية أكثر أماناً وموثوقية</p>
                    </div>
                    <div class="footer-section">
                        <h3>روابط سريعة</h3>
                        <ul>
                            <li><a href="#">للجميع</a></li>
                            <li><a href="#">الشروط والأحكام</a></li>
                            <li><a href="#">سياسة الخصوصية</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h3>تواصل معنا</h3>
                            <div class='email-number'>
                            </p>info@waseet-althiqa.com</p>

                            <p>البريد الإلكتروني <p> 
                            </div>
                            <br>
                            <p>الهاتف: 966+ 12 345 6789</p>
                    </div>
                    <div class="footer-section">
                        <h3>تابعنا</h3>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2024 وسيط الثقة. جميع الحقوق محفوظة.</p>
                </div>
            </footer>
           
        
    
    </body>
    </html>

