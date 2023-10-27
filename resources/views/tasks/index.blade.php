@extends('layouts.nav')

@section('content')
    <div class="h-full w-9/12 flex grow flex-col px-1">
        <div class="flex justify-between items-center">
            <div class="flex flex-col">
                <h2 class="pt-1 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h2>
                <p class="mt-[-8px] px-5 pt-1 font-light text-sm text-gray-400">
                    {{ $date }}
                </p>
            </div>

            <div>
                <form action="{{route('index.date')}}" method="POST">
                    @csrf
                    <div class="flex gap-2 items-center">
                        <input type="date" id="date" name="date" value="{{ old('date') }}"
                            class="border rounded-md py-1 px-1 w-full focus:outline-0 focus:border-[#353560] focus:shadow-md" />

                        <button class="bg-white text-sm font-bold py-1 px-4 rounded-full">
                            Buscar
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="relative flex flex-row overflow-hidden gap-1 grow mb-3">
            <div class="w-4/12 overflow-y-auto h-full px-2 scroll-smooth tasks-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Pendiente</span>
                <ul id="tasksPorHacer" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Pendiente as $task)
                        <li class="rounded-xl border text-white bg-gradient-to-r relative task flex flex-col align-top justify-start card "
                            id="{{ $task->id }}" draggable="true">
                            <div class="flex justify-between">
                                <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}" class="flex-1">
                                    <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                        style="background-color: {{ $task->category->color }}">
                                    </div>
                                    <div class="p-1 pl-5 bg-transparent flex justify-between">
                                        <div class="flex flex-col">
                                            <span class="pl-1">
                                                {{ $task->task_title }}
                                            </span>
                                            <span class="pl-2 text-gray-300 font-semibold">
                                                {{ $task->date }}</h2>
                                            </span>
                                        </div>
                                    </div>

                                </a>
                                <div class="card-toggle">
                                    <div class="w-[24px] h-[24px] hover:h-[26px] hover:w-[26px] m-2 rounded-full">
                                        <img src="{{ asset('Svg/All/linear/arrow-down-2.svg') }}" alt=""
                                            class="hover:h-[26px] hover:w-[26px]">
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}">
                                <div class="m-1 pl-6 bg-transparent card-content scrollbar">
                                    <span>{{ $task->description }}</span>
                                </div>
                            </a>

                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full border-l px-2 scroll-smooth task-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Haciendo</span>
                <ul id="tasksHaciendo" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Haciendo as $task)
                        <li class="rounded-xl border text-white bg-gradient-to-r relative task flex flex-col align-top justify-start card "
                            id="{{ $task->id }}" draggable="true">
                            <div class="flex justify-between">
                                <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}" class="flex-1">
                                    <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                        style="background-color: {{ $task->category->color }}">
                                    </div>
                                    <div class="p-1 pl-5 bg-transparent flex justify-between">
                                        <div class="flex flex-col">
                                            <span class="pl-1">
                                                {{ $task->task_title }}
                                            </span>
                                            <span class="pl-2 text-gray-300 font-semibold">
                                                {{ $task->date }}</h2>
                                            </span>
                                        </div>
                                    </div>

                                </a>
                                <div class="card-toggle">
                                    <div class="w-[24px] h-[24px] hover:h-[26px] hover:w-[26px] m-2 rounded-full">
                                        <img src="{{ asset('Svg/All/linear/arrow-down-2.svg') }}" alt=""
                                            class="hover:h-[26px] hover:w-[26px]">
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}">
                                <div class="m-1 pl-6 bg-transparent card-content scrollbar">
                                    <span>{{ $task->description }}</span>
                                </div>
                            </a>

                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-4/12 overflow-y-auto h-full px-2 border-l scroll-smooth task-state py-3 flex flex-col">
                <span class="text-xl text-white font-semibold">Terminado</span>
                <ul id="tasksTerminado" class="task-list flex flex-col gap-4 flex-1">
                    @foreach ($tasks_Terminado as $task)
                        <li class="rounded-xl border text-white bg-gradient-to-r relative task flex flex-col align-top justify-start card "
                            id="{{ $task->id }}" draggable="true">
                            <div class="flex justify-between">
                                <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}" class="flex-1">
                                    <div class="absolute left-0 bottom-0 top-0 w-[5%] rounded-l-xl"
                                        style="background-color: {{ $task->category->color }}">
                                    </div>
                                    <div class="p-1 pl-5 bg-transparent flex justify-between">
                                        <div class="flex flex-col">
                                            <span class="pl-1">
                                                {{ $task->task_title }}
                                            </span>
                                            <span class="pl-2 text-gray-300 font-semibold">
                                                {{ $task->date }}</h2>
                                            </span>
                                        </div>
                                    </div>

                                </a>
                                <div class="card-toggle">
                                    <div class="w-[24px] h-[24px] hover:h-[26px] hover:w-[26px] m-2 rounded-full">
                                        <img src="{{ asset('Svg/All/linear/arrow-down-2.svg') }}" alt=""
                                            class="hover:h-[26px] hover:w-[26px]">
                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('tasks.edit', $task) }}" id="{{ $task->id }}">
                                <div class="m-1 pl-6 bg-transparent card-content scrollbar">
                                    <span>{{ $task->description }}</span>
                                </div>
                            </a>

                        </li>
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
