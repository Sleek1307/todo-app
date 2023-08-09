@extends('layouts.nav')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 m-2 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('categories.index', $category) }}" class="flex absolute items-center mt-3 ml-3">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex flex-1 justify-center items-center">

            <div class="flex flex-col justify-center items-center bg-white rounded-lg drop-shadow-lg text-black w-4/12 py-5">

                <h2 class="text-4xl font-extrabold drop-shadow-md text-[#353560] mb-4">Editar categoria</h2>

                <form action="{{ route('categories.update', $category) }}" method="POST" class="flex flex-col items-start">
                    {{-- Metodo csrf y definicion del metodo a usar para enviar el formulario --}}
                    @csrf
                    @method('put')

                    <div class="flex-1 flex flex-col justify-center items-center scroll gap-2">
                        <div class="flex flex-col w-full">
                            <label for="category_name" class="font-bold">
                                Nombre de la categoria
                            </label>
                            <input type="text" name="category_name"
                                value="{{ old('category_name', $category->category_name) }}"
                                class="border rounded-md py-1 px-1 w-full focus:outline-0 focus:border-[#353560] focus:shadow-md">

                            @error('category_name')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="color" class="font-bold">Color de la categoria</label>
                            <div class="flex items-center gap-3 border justify-between rounded-md p-1">
                                <label for="color" class="ml-2">Selecciona un color</label>
                                <input type="color" id="color" name="color"
                                    value="{{ old('color', $category->color) }}" class="text-black p-1">
                            </div>
                            @error('color')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="w-full flex justify-start">
                            <button type="submit"
                                class="border border-[#353560] p-2 rounded-xl bg-white cursor-pointer hover:border-[#353560] hover:shadow-lg hover:bg-[#353560] hover:text-white">Actualizar
                                categoria
                            </button>
                        </div>

                    </div>
                </form>

                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                        class="border absolute bottom-5 right-10 border-[#353560] p-2 rounded-xl bg-white cursor-pointer hover:border-[#353560] hover:shadow-lg">
                        <img src="{{ asset('Svg/All/linear/trash.svg') }}" width="24px" />
                    </button>
                </form>

            </div>

        </div>
    </div>
@endsection
