<x-frontendlayout>
    <x-slot name="title">
        Levels
    </x-slot>
    <div class="content d-flex">
        <div class="newMember w-100 my-3 ">
            <div class="container">
                <div class="banner d-flex justify-content-between">
                </div>
                <div class="box mt-5">
                    @foreach ($levels as $level)
                    <div class="admins d-flex justify-content-between">
                        <div class="right">
                            <div class="circle two"></div>
                            <a href="{{ route("levelActivities",$level->name) }}"><span>{{ $level->name }}</span></a>
                        </div>
                        @foreach ($score as $scores)
                            @if ($scores->level_id == $level->id)
                                <div class="left">
                                    <span> Score ={{ $scores->score }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
                <br>
</x-frontendlayout>
