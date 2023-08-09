@extends('layouts.nav')

@section('content')
    <div class="h-full aspect-auto flex grow px-1 text-white">
        {{-- * ================================================ boton de volver ================================================ --}}
        <a href="{{ route('home') }}" class="flex absolute items-center mt-3 ml-3">
            <img src="{{ asset('Svg/All/linear/arrow-left-2.svg') }}" alt="">
            <span class="px-2 font-bold">volver</span>
        </a>
        {{-- * ================================================================================================================= --}}

        <div class="flex flex-1 flex-col items-center justify-center">
            <div
                class="flex flex-col justify-center items-center bg-white rounded-lg drop-shadow-lg text-black w-4/12 py-5">
                <p class="text-4xl font-extrabold drop-shadow-md text-[#353560]">Crear tarea</p>
                <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col items-start">
                    @csrf
                    <div class="flex-1 flex flex-col justify-center items-center ">

                        <div class="flex flex-col w-full">
                            <label for="task_title" class="font-bold">
                                Titulo:
                            </label>
                            <input type="text" id="task_title" name="task_title" value="{{ old('task_title') }}" class="border rounded-md py-1 px-1 w-full focus:outline-0 focus:border-[#353560] focus:shadow-md">

                            @error('task_title')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="description" class="font-bold">
                                Descripcion:
                            </label>
                            <textarea class="border rounded-md py-1 px-1 w-ful focus:outline-0 focus:border-[#353560] focus:shadow-md" name="description" id="description" cols="30" rows="5">{{old('description')}}</textarea>
                            @error('description')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="date" class="font-bold">
                                Fecha:
                            </label>
                            <input type="date" id="date" name="date" value="{{ old('date') }}"
                            class="border rounded-md py-1 px-1 w-full focus:outline-0 focus:border-[#353560] focus:shadow-md">
                            @error('date')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800 ">{{ $message }} <span>{{old('category_id')}}</span></p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="category" class="font-bold">
                                Categoria:
                            </label>

                            <select name="category_id" id="category_id" class="border rounded-md p-1 focus:outline-0 focus:border-[#353560] focus:shadow-md">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}  </p>
                                </div>
                            @enderror
                        </div>

                        <br>
                        <button type="submit" class="border p-2 rounded-xl bg-white">Crear tarea</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
