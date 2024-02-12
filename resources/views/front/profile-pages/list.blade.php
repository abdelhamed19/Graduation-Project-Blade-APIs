<x-frontendlayout>
    <x-slot name="title">
        To-Do-List
    </x-slot>
<x-alert type="success"/>
    <div class="listpage">
        <div class="container">
            <div class="banner d-flex align-items-center mt-4">
                <img src="image/profile/list.png" alt="" class="ms-3">
                <p>قائمه المهام <span class="me-2">{{ Carbon\Carbon::now() }}</span></p>
            </div>
            <div class="category d-flex mt-4 mb-5 justify-content-center">
                <div class="boxes one"><img src="image/list/pin.png" alt="">هدف</div>
                <div class="boxes two"> <img src="image/list/med.png" alt="">علاج</div>
                <div class="boxes three"><img src="image/list/ball.png" alt="">نشاط </div>
                <div class="boxes four py-2"><img src="image/list/calendar.png" alt="">حدث </div>
            </div>
            <form action="{{ route("storeList") }}" method="POST">
                @csrf
            <div class="list">
                <div class="item ">
                    <div>
                        <img src="image/list/pin.png" alt="">
                        <input type="text" placeholder="اكتب هدفك هنا" style="width: 650px; border-radius: 10px;  border: 2px solid rgba(255, 0, 0, 0.5); "
                         name="todolist1" value="{{ $tasks[0] }}">
                    </div>
                    <input type="radio">
                </div>
                <div class="item ">
                    <div>
                        <img src="image/list/med.png" alt="">
                        <input type="text" placeholder="اكتب هدفك هنا" style="width: 650px; border-radius: 10px;  border: 2px solid rgba(255, 0, 0, 0.5); "
                        name="todolist2" value="{{ $tasks[1] }}">
                    </div>
                    <input type="radio">
                </div>
                <div class="item ">
                    <div>
                        <img src="image/list/ball.png" alt="">
                        <input type="text" placeholder="اكتب هدفك هنا" style="width: 650px; border-radius: 10px;  border: 2px solid rgba(255, 0, 0, 0.5); "
                        name="todolist3" value="{{ $tasks[2] }}">
                    </div>
                    <input type="radio">
                </div>
                <div class="item ">
                    <div>
                        <img src="image/list/calendar.png" alt="">
                        <input type="text" placeholder="اكتب هدفك هنا" style="width: 650px; border-radius: 10px;  border: 2px solid rgba(255, 0, 0, 0.5); "
                         name="todolist4" value="{{ $tasks[3] }}">
                    </div>
                    <input type="radio">
                </div>
                <div class="buttons me-auto">
                    <button type="submit" class="btn btn-primary"> إحتفظ بها</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <br>
</x-frontendlayout>
