@extends('layouts.plantilla')

@section('content')
    <div class="col-span-4 px-1">
        <h1 class="pt-2 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h1>
        <h2 class="mt-[-8px] px-6 font-light text-sm text-gray-400">Martes 15 de Febrero</h2>
        <br>
        <div class="grid grid-cols-3 h-full">
            <ul class="overflow-y-auto h-full border-r px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Haciendo</span>

                @foreach ($tasks_Pendiente as $task)
                    <br>
                    <li class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                        <div class="p-2 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                        <div>
                            <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                        </div>
                    </li>
                @endforeach
            </ul>
            <ul class="overflow-y-auto h-full border-r px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Haciendo</span>

                @foreach ($tasks_Haciendo as $task)
                    <br>
                    <li class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5%">
                        <div class="p-2 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                        <div>
                            <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                        </div>
                    </li>
                @endforeach
            </ul>
            <ul class="overflow-y-auto h-full px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Haciendo</span>

                @foreach ($tasks_Terminado as $task)
                    <br>
                    <li class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                        <div class="p-2 pl-5 bg-transparent"> {{ $task->task_title }} </div>
                        <div>
                            <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

