<x-frontendlayout>
    <x-slot name="title">
        Admin Profile
    </x-slot>
    <x-alert type="success" />
    <div class="profile-banner">
        <div class="container pt-4 d-sm-flex align-items-center text-center text-sm-end">
            <img src="{{ asset(Auth::user()->image) }}" alt="" width="200" height="200">
            <div class="content me-sm-5 mt-3">
                <h2>{{ Auth::user()->name }}<h2>
                        <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="profile-info ">
        <div
            class="container  flex-column justify-content-around flex-wrap align-content-center align-content-sm-start">
            <div>
                <img src="{{ asset("image/profile/lock.png") }}" style="width: 40px" alt="">
                <a href="{{ route('changePasswordPage') }}">
                    <p class="fw-bold" style="color: #164863;">تغيير كلمة المرور</p>
                </a>
            </div>
            <br>
            <div>
                <img src="{{ asset("image/profile/lougout.png") }}" style="width: 40px" alt="">
                <form method="POST" action="{{ route('users.destroy',Auth::user()->id) }}">
                    @csrf
                    @method('Delete')
                    <a href="{{ route('users.destroy',Auth::user()->id) }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        <p class="fw-bold" style="color: red;">حذف الحساب</p>
                    </a>
            </div>
        </div>
    </div>
</x-frontendlayout>
