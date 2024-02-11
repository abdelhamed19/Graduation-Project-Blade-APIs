<x-frontendlayout>
        <x-slot name="title">
            Profile
        </x-slot>

    <div class="loginPage  ">
        <div class="container d-flex flex-column flex-sm-row ">
            <div class="image ">
            <img src="image/login/image.png" class="logoo" alt="">
            <img src="image/login/title.png" class="ulogoo" alt="">
            </div>
            <form action="{{ route("changePassword") }}" method="POST">
                @csrf
                @method("PUT")
                <div class="title"> تغيير كلمة المرور</div>
                <div class="mb-3 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">كلمه المرور الحاليه<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="old_password" class="form-control text-end" id="formGroupExampleInput2" placeholder="ادخل كلمه المرور الحاليه"}} >
                    <x-message-error name="old_password"/>
                </div>
                 <div class="mb-3 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">كلمه المرور الجديده<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="password" class="form-control text-end" id="formGroupExampleInput2" placeholder="ادخل كلمه المرور الجديده"}} >
                    <x-message-error name="password"/>
                </div>
                <div class="mb-3 text-end">
                    <label for="formGroupExampleInput2" class="form-label mb-3">كلمه المرور الجديده<i class="fa-solid ms-2 fa-lock"></i></label>
                    <input type="password" name="password_confirmation" class="form-control text-end" id="formGroupExampleInput2" placeholder="اعد إدخال كلمه المرور الجديده"}} >
                    <x-message-error name="password_confirmation"/>
                </div>
                    <button type="submit" class="btn btn-primary">تغيير الكلمه</button>
                    <x-message-error name="Invalid"/>
             </form>
        </div>
    </div>

</x-frontendlayout>
