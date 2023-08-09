@extends('layouts.nav')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('home') }}" class="flex my-1 ">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex flex-1 flex-col items-center justify-center">

            <div
                class="flex flex-col justify-center items-center bg-white rounded-lg drop-shadow-lg text-black w-4/12 h-[400px]">
                <h2 class="text-4xl font-extrabold drop-shadow-md text-[#353560] mb-4">Nueva categoria</h2>
                <form action="{{ route('categories.store') }}" method="POST" class="flex flex-col items-start">
                    @csrf
                    <div class="flex-1 flex flex-col justify-center items-center">

                        <div class="flex flex-col w-full"><label for="category_name" class="font-bold">
                                Nombre:
                            </label>
                            <input type="text" id="category_name" name="category_name" value="{{ old('category_name') }}"
                                class="border rounded-md py-1 px-1 w-full">
                            @error('category_name')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="color" class="font-bold">Color de la categoria</label>
                            <div class="flex items-center gap-3 border justify-between rounded-md p-1">
                                <label for="color" class="ml-2">Selecciona un color</label>
                                <input type="color" id="color" name="color" value="{{ old('color') }}"
                                    class="text-black p-1">
                            </div>
                            @error('color')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <br>
                        <button type="submit"
                            class="border border-[#353560] p-2 rounded-xl bg-white cursor-pointer hover:border-[#353560] hover:shadow-lg hover:bg-[#353560] hover:text-white">Crear
                            categoria
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
