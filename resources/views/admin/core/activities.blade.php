<x-frontendlayout>
    <x-slot name="title">
        Activities
    </x-slot>
    <x-alert type="success" />
    <div class="content d-flex">
        <x-dashboard-layout />
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                    <div class="title">
                        <h3 style="color:#164863 " ><b>لوحة التحكم / المستويات / التمارين</b></h3>
                    </div>
                    <div class="btn">
                        <img src="{{ asset('image/list/plus.png') }}"" alt="">
                        <a style="color: white" href="{{ route('add-activity') }}">اضافه تمرين جديد</a>
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
                            <span style="color:darkcyan">{{ $activity->type }}</span>
                        </div>
                        <div>
                            <form action="{{ route("delete-activity",$activity->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                    @if(is_array($activity->description))
                    <span style="color:maroon">{{ implode(",",$activity->description) }}</span>
                    @else
                    <span style="color:maroon">{{ json_decode($activity->description) }}</span>
                    @endif

                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

                <br>
</x-frontendlayout>
