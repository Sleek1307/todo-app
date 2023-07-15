@extends('layouts.home')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 m-2 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('tasks.show', $task) }}" class="flex mb-5">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex overflow-hidden p-3 justify-center text-white">
            <span>Aqui podras modificar la tarea <span class="font-bold">{{ $task->task_title }}</span> </span>
        </div>
        <div class="flex justify-center">
            <form action="{{ route('tasks.update', $task) }}" method="POST" class="flex flex-col items-start">

                @csrf

                @method('put')

                <label for="">
                    Nombre de la tarea:
                    <br>
                    <input type="text" name="task_title" value="{{ old('task_title', $task->task_title) }}" class="text-black w-96 p-1">
                </label>

                @error('task_title')

                    <small>*{{$message}}</small>

                @enderror

                <br>
                <label for="">
                    Descripcion de la tarea:
                    <br>
                    <textarea name="description" rows="5" class="text-black w-96 p-1">{{ old('description', $task->description) }}</textarea>
                </label>

                @error('description')

                    <small>*{{$message}}</small>

                @enderror

                <br>
                <label for="">
                    Fecha finalizacion de la tarea:
                    <br>
                    <input type="date" name="date" value="{{ old('date', $task->date) }}" class="text-black w-96 p-1">
                </label>

                @error('date')

                    <small>*{{$message}}</small>

                @enderror

                <br>
                <button type="submit" class="border border-blue-300 p-2 rounded-xl text-blue-300 bg-blue-600">Actualizar tarea</button>
            </form>
        </div>
    </div>
@endsection
