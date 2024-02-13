<x-frontendlayout>
    <x-slot name="title">
        Levels
    </x-slot>
    <x-alert type="success" />
    <div class="content d-flex">
        <x-dashboard-layout />
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                    <div class="title">
                        <h3 style="color:#164863 " ><b>لوحة التحكم / المستويات</b></h3>
                    </div>
                    <div class="btn">
                        <img src="{{ asset('image/list/plus.png') }}"" alt="">
                        <a style="color: white" href="{{ route('add-level') }}">اضافه مستوى جديد</a>
                    </div>
                </div>
                <div class="box mt-5">
                    @foreach ($levels as $level)
                    <div class="admins d-flex justify-content-between">
                        <div class="right">
                            <div class="circle two"></div>
                            <a href="{{ route("dashboardActivities",$level->name) }}"><span>{{ $level->name }}</span></a>
                        </div>
                        <form action="{{ route("delete-level",$level->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
                <br>
</x-frontendlayout>
