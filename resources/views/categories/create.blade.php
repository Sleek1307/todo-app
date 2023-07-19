@extends('layouts.home')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 m-2 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('todayTasks') }}" class="flex mb-5">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex p-3 justify-center">
            <span>En esta pagina podras crear una categoria</span>
        </div>

        <div class="flex justify-center">
            <form action="{{ route('categories.store') }}" method="POST" class="flex flex-col items-start">
                @csrf

                <label for="">
                    Nombre:
                    <br>
                    <input type="text" name="category_name" value="{{ old('category_name') }}"
                        class="text-black w-96 p-1">
                </label>

                @error('category_name')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <br>
                <label for="">
                    Elige un color para tu categoria:
                    <br>
                    <input type="color" name="color" value="{{ old('color') }}" class="text-black  p-1">
                </label>

                @error('color')
                    <small>*{{ $message }}. {{ old('color') }}</small>
                @enderror

                <br>
                <button type="submit" class="border border-blue-300 p-2 rounded-xl text-blue-300 bg-blue-600">Crear
                    categoria</button>
            </form>
        </div>
    </div>
@endsection
