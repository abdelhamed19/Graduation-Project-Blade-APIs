<x-frontendlayout>
    <x-slot name="title">
        Profile
    </x-slot>
    <div class="profile-banner">
        <div class="container pt-4 d-sm-flex align-items-center text-center text-sm-end">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="157" height="157" viewBox="0 0 157 157" fill="none">
                <g clip-path="url(#clip0_604_10990)">
                  <rect width="157" height="157" rx="78.5" fill="#666666"/>
                  <mask id="mask0_604_10990" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="9" width="190" height="189">
                    <circle cx="98.91" cy="103.62" r="94.2" fill="#403F3F"/>
                  </mask>
                  <g mask="url(#mask0_604_10990)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M77.4567 85.6366C78.1529 85.5494 78.9362 85.5494 79.5454 85.6366C94.8624 85.1136 106.959 72.5623 107.046 57.1347C107.046 41.3585 94.2532 28.5457 78.501 28.5457C62.6618 28.5457 49.9556 41.3585 49.9556 57.1347C49.9556 72.5623 62.1396 85.1136 77.4567 85.6366ZM78.5033 156.999C97.0578 156.999 119.323 149.765 132.026 135.59C131.312 127.416 121.607 118.04 113.971 111.779C94.5601 95.9518 62.5892 95.9518 43.0355 111.779C35.3996 118.04 25.6941 127.416 24.9805 135.59C37.6832 149.765 59.9487 156.999 78.5033 156.999Z" fill="#AEAEAE"/>
                  </g>
                </g>
                <defs>
                  <clipPath id="clip0_604_10990">
                    <rect width="157" height="157" rx="78.5" fill="white"/>
                  </clipPath>
                </defs>
              </svg> --}}
                <img src="{{ asset($user->image) }}" alt="" width="200" height="200">
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
        <span class="prec">25%</span>
       <div class="container d-flex flex-column justify-content-around flex-wrap align-content-center align-content-sm-start">
        <div class="item">
            <img src="image/profile/star.png" alt="">
            <a href=""><p class="fw-bold" style="color: #164863;"> التمارين</p>
            </a>
        </div>
        <div class="item">
            <img src="image/profile/list.png" alt="">
            <a href=""><p class="fw-bold" style="color: #164863;">قائمة المهام</p>
            </a>
        </div>
        <div class="item">
            <img src="image/profile/lock.png" alt="">
            <a href="{{ route("changePasswordPage") }}"><p class="fw-bold" style="color: #164863;">تغيير كلمة المرور</p>
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
