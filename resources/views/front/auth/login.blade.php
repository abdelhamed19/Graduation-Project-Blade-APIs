<x-auth-layout >
    <x-slot name="title">
        Login
    </x-slot>
    <div class="loginPage  ">
        <div class="container d-flex flex-column flex-sm-row ">
            <div class="image ">
            <img src="image/login/image.png" class="logoo" alt="">
            <img src="image/login/title.png" class="ulogoo" alt="">
            </div>

            <form action="{{ route("login") }}" method="POST">
                @csrf
                <div class="title">تسجيل الدخول</div>
                <p class="text-center">ليس لديك حساب؟<a href="{{ route("registerPage") }}">انشاء حساب</a></p>
                <div class="mb-4 text-end">
                    <label for="formGroupExampleInput" class="form-label mb-3 "> البريد الإلكتروني<i class="fa-solid ms-2 fa-user"></i></label>
                    <input type="email" name="email" class="form-control  text-end" id="formGroupExampleInput" placeholder="ادخل البريد اللإلكتروني" value="{{old('email') }}">
                    <x-message-error name="email"/>
                 </div>
                 <div class="mb-5 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">كلمه المرور<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="password" class="form-control text-end" id="formGroupExampleInput2" placeholder="ادخل كلمه المرور"}} >
                    <x-message-error name="password"/>
                </div>
                    <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                    <div class="text-center">
                    <x-message-error name="Invalid"/>
                    <p class="text-center"><a href="{{ route("home") }}"> العوده للرئيسيه</a></p>
                    </div>
             </form>
        </div>
    </div>
</x-auth-layout>
