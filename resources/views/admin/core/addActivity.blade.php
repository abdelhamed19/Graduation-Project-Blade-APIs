<x-frontendlayout>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-alert type="success" />
    <x-alert type="error" />
    <div class="content d-flex">
        <x-dashboard-layout />
        <div class="newMember w-100 my-3 ">
            <div class="title">
                <h3 style="color:#164863 "><b>لوحة التحكم / المستويات </b></h3>
            </div>
            <div class="container">
                <div class="popup">
                    <form class="row g-3 " action="{{ route("store-activity") }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="title text-center">اضافه تمرين جديد</div>
                            </div>
                        </div>
                        <div class="col-md-6 ms-auto">
                            <label for="inputState" class="form-label">نوع التمرين</label>
                            <select id="inputState" name="type" class="form-select">
                                <option value="حركه">حركه</option>
                                <option value="مشاعر">مشاعر</option>
                                <option value="عقل">عقل</option>
                                <option value="مجتمع">مجتمع</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">اسم التمرين</label>
                            <input type="name" name="name" class="form-control" id="inputEmail4" value="{{ old("name") }}">
                            <x-message-error name="name" />
                        </div>
                        <div class="col-md-6 ms-auto">
                            <label for="inputState" class="form-label">تحديد المستوى</label>
                            <select id="inputState" name="level" class="form-select">
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endforeach
                                <x-message-error name="level" />
                            </select>
                        </div>
                        <div class="mb-3 col-7 ms-auto">
                            <label for="exampleFormControlTextarea1" class="form-label">وصف التمرين</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">
                            </textarea>
                            <x-message-error name="description" />
                            <br>
                            <button type="submit" class="btn btn-primary">اضافه</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
</x-frontendlayout>
