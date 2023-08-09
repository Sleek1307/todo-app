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
                <p class="mb-1 text-lg text-center font-bold whitespace-pre-line">Nueva categoria</p>
                <form action="{{ route('categories.store') }}" method="POST" class="flex flex-col items-start">
                    @csrf
                    <div class="flex-1 flex flex-col justify-center items-center">

                        <div class="flex flex-col w-full"><label for="category_name">
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
                            <label for="color">
                                Elige un color para tu categoria:
                            </label>
                            <input id="color" type="color" name="color" value="{{ old('color') }}"
                                class="p-1 rounded h-[50px] w-full">
                        </div>


                        @error('color')
                            <small>*{{ $message }}. {{ old('color') }}</small>
                        @enderror

                        <br>
                        <button type="submit" class="border border-blue-300 p-2 rounded-xl text-blue-300 bg-blue-600">Crear
                            categoria</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
