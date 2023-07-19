@extends('layouts.home')

@section('content')
    <div class="grow m-2 h-full aspect-auto">
        <a href="{{ route('home') }}" class="flex mb-5 text-white">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        <div class="flex flex-col grow overflow-hidden p-3 items-center text-white">
            <span>Aqui podras modificar o eliminar esta tarea </span>
            <h1>Titulo: <span> {{ $task->task_title }}</span></h1>
            <br>
            <h1 class="mx-5">Descripcion: <span>{{ $task->description }}</span></h1>
            <h1>Estado: <span>
                    @switch($task->status)
                        @case(1)
                            Haciendo
                        @break

                        @case(2)
                            Terminado
                        @break

                        @default
                            Pendiente
                    @endswitch
                </span></h1>
            <h1 class="mb-2">Fecha: <span>{{ $task->date }}</span></h1>
            <div class="flex">
                <a href=" {{ route('tasks.edit', $task) }} "
                    class="mx-5 border-2 border-gray-600 rounded-lg p-1 bg-gray-400">Editar</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="mx-5 border-2 border-gray-600 rounded-lg p-1 bg-gray-400"">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
