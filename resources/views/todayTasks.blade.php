@extends('layouts.home')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1">
        <div class="flex flex-col">
            <h1 class="pt-1 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h1>
            <h2 class="mt-[-8px] px-5 pt-1 font-light text-sm text-gray-400">Martes 15 de Febrero</h2>
        </div>

        <div class="flex flex-row overflow-hidden grow mb-3">
            <ul class="w-4/12 overflow-y-auto h-full border-r px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Pendiente</span>

                @foreach ($tasks_Pendiente as $task)
                    <br>
                    <a href="{{ route('tasks.show', $task) }}">
                        <li class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                            <div class="p-2 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                            <div>
                                <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
            <ul class="w-4/12 overflow-y-auto h-full border-r px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Haciendo</span>

                @foreach ($tasks_Haciendo as $task)
                    <br>
                    <a href="{{ route('tasks.show', $task) }}">
                        <li class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5%">
                            <div class="p-2 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                            <div>
                                <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
            <ul class="w-4/12 overflow-y-auto h-full px-2 scroll-smooth ">
                <span class="text-xl text-white font-semibold">Terminado</span>

                @foreach ($tasks_Terminado as $task)
                    <br>
                    <a href="{{ route('tasks.show', $task) }}">
                        <li
                            class="rounded-xl border text-white bg-gradient-to-r from-red-300 from-5% to-transparent to-5% ">
                            <div class="p-2 pl-5 bg-transparent"> {{ $task->task_title }} </div>
                            <div>
                                <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
        {{--


        </div> --}}
    </div>
@endsection
