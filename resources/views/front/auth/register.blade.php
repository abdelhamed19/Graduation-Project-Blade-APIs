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

            <form action="{{ route("register") }}" style="height: 600px;" method="POST">
                <div class="title mb-3">انشاء حساب</div>
                @csrf
                <p class="text-center">لديك حساب بالفعل؟<a href="{{ route("loginPage") }}">تسجيل دخول</a></p>
                <div class="mb-3 text-end">
                    <label for="formGroupExampleInput" class="form-label mb-3 ">اسم المستخدم<i class="fa-solid ms-2 fa-user"></i></label>
                    <input type="text" name="name" class="form-control  text-end" id="formGroupExampleInput" placeholder="ادخل اسم المستخدم" value="{{ old('name') }}" required>
                    <x-message-error name="name"/>
                 </div>
                <div class="mb-3 text-end">
                    <label for="formGroupExampleInput" class="form-label mb-3 ">البريد الالكتروني<i class="fa-solid ms-2 fa-envelope"></i></label>
                    <input type="email" name="email" class="form-control  text-end" id="formGroupExampleInput" placeholder="ادخل بريدك الالكتروني" value="{{ old('email') }}" required>
                    <x-message-error name="email"/>
                 </div>
                 <div class="mb-3 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">كلمه المرور<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="password" class="form-control text-end" id="formGroupExampleInput2" placeholder="ادخل كلمه المرور" required>
                    <x-message-error name="password"/>
                 </div>
                 <div class="mb-3 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">تاكيد كلمه المرور<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="password_confirmation" class="form-control text-end" id="formGroupExampleInput2" placeholder="ادخل كلمه المرور مره اخري" required>
                    <x-message-error name="password_confirmation"/>
                </div>
                 <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
             </form>
        </div>
    </div>
</x-auth-layout>
