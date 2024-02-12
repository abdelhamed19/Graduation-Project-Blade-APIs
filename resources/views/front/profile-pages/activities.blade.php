<x-frontendlayout>
    <x-slot name="title">
        Activities
    </x-slot>
    <div class="content d-flex">
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                    <div class="title">
                        <img src="{{ asset("image/list/profile-2user.png") }}" alt="">
                        <a style="color: #164863" href="{{ route("levels") }}">المستويات</a> / التمارين
                    </div>
                </div>
                <div class="box mt-5">
                    @if($activities->isEmpty())
                        <div class="alert alert-danger" role="alert">
                            No activities found
                        </div>
                    @endif
                    @foreach ($activities as $activity)
                    <div class="admins d-flex justify-content-between">
                        <div class="right">
                            <div class="circle one"></div>
                            <span>{{ $activity->title }}</span>
                        </div>
                        <div class="left">
                            <span  style="color:darkcyan">{{ $activity->type }}</span>
                        </div>
                    </div>
                    <span style="color:maroon">{{ implode(",",$activity->description) }}</span>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

                <br>
</x-frontendlayout>
