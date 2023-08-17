@extends('layouts.nav')

@section('content')
    <div class="h-full w-9/12 flex grow flex-col px-1">
        <div class="flex flex-col">
            <h2 class="pt-1 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h2>
            <p class="mt-[-8px] px-5 pt-1 font-light text-sm text-gray-400">Martes 15 de Febrero</p>
        </div>

        <div class="relative flex flex-row overflow-hidden gap-1 grow mb-3">
            <div class="w-4/12 overflow-y-auto h-full px-2 scroll-smooth tasks-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Pendiente</span>
                <ul id="tasksPorHacer" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Pendiente as $task)
                        <a href="{{ route('tasks.edit', $task) }}" class="task" draggable="true" id="{{ $task->id }}">
                            <li class="rounded-xl border text-white relative">
                                <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                    style="background-color: {{ $task->category->color }}">
                                </div>
                                <div class="p-1 pl-7 bg-transparent my-0"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-7 text-gray-300">{{ $task->date }}</h2>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full border-l px-2 scroll-smooth task-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Haciendo</span>
                <ul id="tasksHaciendo" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Haciendo as $task)
                        <a href="{{ route('tasks.edit', $task) }}" class="task" draggable="true" id="{{ $task->id }}">
                            <li class="rounded-xl border text-white bg-gradient-to-r relative task"
                                id="{{ $task->id }}">

                                <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                    style="background-color: {{ $task->category->color }}">
                                </div>
                                <div class="p-1 pl-5 bg-transparent my-0"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                                </div>

                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full px-2 border-l scroll-smooth task-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Terminado</span>
                <ul id="tasksTerminado" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Terminado as $task)
                        <a href="{{ route('tasks.edit', $task) }}" class="task" draggable="true"
                            id="{{ $task->id }}">
                            <li class="rounded-xl border text-white bg-gradient-to-r relative task"
                                id="{{ $task->id }}">
                                <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                    style="background-color: {{ $task->category->color }}">
                                </div>
                                <div class="p-1 pl-5 bg-transparent"> {{ $task->task_title }} </div>
                                <div>
                                    <h2 class="pl-5 text-gray-300">{{ $task->date }}</h2>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>

            <a href="{{ route('tasks.create') }}"
                class="absolute bottom-0 right-0 bg-white text-sm font-bold px-3 py-1 mb-3 mr-4 rounded-full">
                Agregar tarea
            </a>
        </div>

        {{-- </div> --}}
    </div>
@endsection
