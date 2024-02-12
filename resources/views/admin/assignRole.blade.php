<x-frontendlayout>
    <x-slot name="title">
        Add new Role
    </x-slot>
    <x-alert type="success" />
    <div class="container">
        <div class="popup">
            <form class="row g-3 " action="{{ route('assignRole') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="title text-center">اضافه عضو جديد</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">البريد الالكتروني</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4"
                        value="{{ old('email') }}">
                    <x-message-error name="email" />
                </div>
                <div class="col-md-6 ms-auto">
                    <label for="inputState" class="form-label">الدور</label>
                    <select id="inputState" class="form-select" name="role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" selected>{{ $role->name }}</option>
                        @endforeach
                        <x-message-error name="role" />
                    </select>
                </div>
                <div class="col-auto mx-auto ">
                    <button type="submit" style="background-color: #164863" class="btn btn-primary">إضافه</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <hr>
</x-frontendlayout>
