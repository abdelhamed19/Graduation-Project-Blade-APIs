<x-frontendlayout>
    <x-slot name="title">
        Profile
    </x-slot>
    <x-alert type="success"/>
    <div class="profile-banner">
        <div class="container pt-4 d-sm-flex align-items-center text-center text-sm-end">
            <style>
                .profile-info .progress .prog {
                    width:{{ $totalScore }}%;
                    height: 10px;
                    border-radius: 12px;
                    background: #164863;
                }
            </style>
            <img src="{{ asset(Auth::user()->image) }}" alt="" width="200" height="200">
            <div class="content me-sm-5 mt-3">
                <h2>{{ Auth::user()->name }}<h2>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>

    <div class="profile-info ">
        <div class="progress">
            <div class="prog"></div>
        </div>
        <span class="prec">{{ $totalScore }}%</span>
        <div
            class="container d-flex flex-column justify-content-around flex-wrap align-content-center align-content-sm-start">
            <div class="item">
                <img src="image/profile/star.png" alt="">
                <a href=""{{ route('levels') }}"">
                    <a href="{{ route('levels') }}">
                        <p class="fw-bold" style="color: #164863;">التمارين</p>
                    </a>
                </a>
            </div>
            <div class="item">
                <img src="image/profile/list.png" alt="">
                <a href="{{ route('list-view') }}">
                    <p class="fw-bold" style="color: #164863;">قائمة المهام</p>
                </a>
            </a>
            </div>
            <div class="item">
                <img src="image/profile/lock.png" alt="">
                <a href="{{ route('changePasswordPage') }}">
                    <p class="fw-bold" style="color: #164863;">تغيير كلمة المرور</p>
                </a>
            </div>
            <div class="item">
                <img src="image/profile/lougout.png" alt="">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        <p class="fw-bold" style="color: red;">تسجيل الخروج</p>
                    </a>
            </div>
        </div>
    </div>
</x-frontendlayout>
