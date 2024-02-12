<x-frontendlayout>
    <x-slot name="title">
        Add new Role
    </x-slot>
    <x-alert type="success" />
    <div class="container">
        <div class="popup">
            <form class="row g-3 " action="{{ route('storeRole') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="title text-center">اضافه دور جديد</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="role" id="inputEmail4" placeholder="ادخل اسم الدور"
                        value="{{ old('role') }}">
                    <x-message-error name="role" />
                </div>
                <div class="col-md-6 ms-auto">
                </div>
                <div class="col-auto ">
                    <button type="submit" style="background-color: #164863" class="btn btn-primary">إضافه</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <hr>
</x-frontendlayout>
