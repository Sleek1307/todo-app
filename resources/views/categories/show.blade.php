@extends('layouts.home')

@section('content')
    <div class="grow m-2 h-full aspect-auto">
        <a href="{{ route('home') }}" class="flex mb-5 text-white">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        <div class="flex flex-col grow overflow-hidden p-3 items-center text-white">
            <span>Aqui podras modificar o eliminar esta Categoria </span>
            <h1>Titulo: <span> {{ $category->category_name }}</span></h1>
            <h1 class="flex items-center">Color:
                <svg width="16" height="16" class="mx-2">
                    <circle cx="8" cy="8" r="8" fill="{{ $category->color }}" />
                </svg>
            </h1>
            <br>

            <div class="flex">
                <a href=" {{ route('categories.edit', $category) }} "
                    class="mx-5 border-2 border-gray-600 rounded-lg p-1 bg-gray-400">Editar</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="mx-5 border-2 border-gray-600 rounded-lg p-1 bg-gray-400"">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
