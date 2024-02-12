<x-frontendlayout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-alert type="success" />
    <x-alert type="error" />
    <div class="content d-flex">
        <x-dashboard-layout />
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                    <div class="title">
                        <img src="image/list/profile-2user.png" alt="">الاعضاء
                    </div>
                    <div class="btn">
                        <img src="{{ asset('image/list/plus.png') }}"" alt="">
                        <a style="color: white" href="{{ route('assignRole') }}">اضافه عضو جديد</a>
                    </div>
                </div>
                <div class="box mt-5">
                    @foreach ($usersWithRoles as $user)
                        <div class="admins d-flex justify-content-between">
                            <div class="right">
                                <img src="image/ciclre-removebg-preview.png" width="40" height="40" alt="">
                                <span>{{ $user->name }}</span>
                            </div>
                            @foreach ($user->roles as $role)
                                <div class="left">
                                    <span><h2>{{ $role->name }}</h2></span>
                                    <a href="" class="btn btn-primary me-1">Edit</a>
                                    <form action="{{ route("removeRole",$user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger  me-1">Delete</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
</x-frontendlayout>
