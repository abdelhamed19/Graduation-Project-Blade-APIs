<x-frontendlayout>
    <x-slot name="title">
        Add new Role
    </x-slot>
    <x-alert type="success" />
    <div class="content d-flex">
        <x-dashboard-layout />
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                    <div class="title">
                        <img src="{{ asset("image/list/profile-2user.png") }}" alt="">الادوار
                    </div>
                    <div class="btn">
                        <img src="{{ asset('image/list/plus.png') }}"" alt="">
                        <a style="color: white" href="{{ route('createRole') }}">اضافه دور جديد</a>
                    </div>
                </div>
                <div class="box mt-5">
                    <div class="admins d-flex justify-content-between">
                        @foreach ($roles as $role)
                        <div class="right">
                            <img src="{{ asset("image/role.png") }}" width="40" height="40" alt="">
                            <span>{{ $role }}</span>
                        </div>
                        <div class="left">
                            <form action="{{ route("deleteRole",$role) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger  me-1">Delete</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontendlayout>
