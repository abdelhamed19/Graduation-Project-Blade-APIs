<x-frontendlayout>
    <x-slot name="title">
        Exercise
    </x-slot>
    <div class="exercises">
        <div class="container">
            <div class="top d-flex align-items-center pt-4">
                <img src="{{ asset('image/profile/star.png') }}" alt="">
                <span class="me-3">التطبيق</span>
            </div>
            <div class="content d-flex justify-content-between">

                <div class="para">
                    <p class="pb-1 pt-9"> عن التطبيق: يحتوى على عدة تمارين تساعدك على التخلص من المرض وتهدئة اعصابك على المدى البعيد</p>
                    <div class="buttons me-auto">
                        <div class="btn reg">
                            <a class="reg-link" href="{{ route('registerPage') }}"> حمل التطبيق الان</a>
                        </div>
                        <hr>
                        <div class="exercises">
                            <div class="container d-flex ">
                                <div class="top d-flex align-items-start pt-5 ">
                                    <img src="{{ asset('image/profile/star.png') }}" alt="">
                                    <span class="me-3">التمارين</span>
                                </div>
                                <div class="category text-center justify-content-between">
                                    <img src="{{ asset("image/stars.png") }}" alt="">
                                    <p class="mb-4">انواع التمارين داخل التطبيق متعدده ومختلفه مثل</p>
                                    <div class="row justify-content-center">
                                        <div class="col-10 col-sm-4 box ms-sm-3 mb-sm-3 one  mb-3"> تمارين للمشاعر</div>
                                        <div class="col-10 col-sm-4 box mb-sm-3 two mb-3"> تمارين للعقل</div>
                                        <div class="col-10 col-sm-4 box ms-sm-3 three mb-3"> تمارين للحركه</div>
                                        <div class="col-10 col-sm-4 box four mb-3"> تمارين للمجتمع</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image">
                    <img src="{{ asset('image/mobile.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
</x-frontendlayout>
