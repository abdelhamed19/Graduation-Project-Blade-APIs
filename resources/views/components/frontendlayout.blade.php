<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com') }}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/exe2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newexe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addNewMember.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container ">
            <div class="im d-sm-none">
                <img src="{{ asset('image/Logo.png') }}" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item d-none d-lg-block">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('image/Logo.png') }}" alt="Logo"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activeLink" aria-current="page" href="{{ route('home') }}">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('exercise') }}">التمارين والالعاب</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">الاختبار</a>
                    </li>
                    @auth
                        @if (Auth::user()->hasRole(['super-admin', 'admin']))
                        <div class="buttons me-auto">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">تسجيل الخروج</button>
                            </form>
                        </div>
                        <!-- Profile icon link -->
                        <div class="buttons me-2">
                            <div class="btn login">
                                <a style="color: black;"  class="log-link" href="{{ route('dashboard') }}">لوحة التحكم</a>
                            </div>
                        </div>
                        @else
                            <div class="buttons me-auto">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">تسجيل الخروج</button>
                                </form>
                            </div>
                            <!-- Profile icon link -->
                            <div class="buttons me-2">
                                <div class="btn login">
                                    <a style="color: #abbfca;" class="log-link" href="{{ route('profile') }}">الملف
                                        الشخصي</a>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="buttons me-auto">
                            <div class="btn reg">
                                <a class="reg-link" href="{{ route('registerPage') }}">انشاء حساب</a>
                            </div>
                            <div class="btn login">
                                <a class="log-link" href="{{ route('loginPage') }}">تسجيل الدخول</a>
                            </div>
                        </div>
                    @endauth
                </ul>


            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- footer  -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="coll-3 col-md-12 col-lg-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('image/footer.png') }}" alt="">
                    </a>
                </div>
                <div class="coll-5 col-md-6 col-lg-4">
                    <ul class="d-flex justify-content-between">
                        <li>الرئيسيه</li>
                        <li>التمارين والالعاب</li>
                        <li>الاختبار</li>
                    </ul>
                </div>
                <div class="coll-4 col-md-6 col-lg-4">
                    <p>تواصل معنا</p>
                    <div class="icons ">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="mail">
                        bibalance@gmail.com <i class="fa-regular fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
