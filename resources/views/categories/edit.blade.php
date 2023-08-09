@extends('layouts.nav')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 m-2 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('categories.show', $category) }}" class="flex mb-5">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex overflow-hidden p-3 justify-center text-white">
            <span>Aqui podras modificar la categoria <span class="font-bold">{{ $category->category_title }}</span> </span>
        </div>
        <div class="flex justify-center">
            <form action="{{ route('categories.update', $category) }}" method="POST" class="flex flex-col items-start">

                @csrf

                @method('put')

                <label for="">
                    Nombre de la categoria:
                    <br>
                    <input type="text" name="category_name" value="{{ old('category_name', $category->category_name) }}" class="text-black w-96 p-1">
                </label>

                @error('category_name')

                    <small>*{{$message}}</small>

                @enderror

                <br>
                <label for="">
                    Color de la categoria:
                    <br>
                    <input type="color" name="color" value="{{ old('color', $category->color) }}" class="text-black  p-1">
                </label>

                @error('color')

                    <small>*{{$message}}. {{ old('color', $category->color) }}</small>

                @enderror

                <br>
                <button type="submit" class="border border-blue-300 p-2 rounded-xl text-blue-300 bg-blue-600">Actualizar tarea</button>
            </form>
        </div>
    </div>
@endsection
