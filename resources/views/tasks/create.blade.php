@extends('layouts.home')

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
                class="flex flex-col justify-center items-center bg-white rounded-lg drop-shadow-lg text-black w-4/12 py-5">
                <p class="mb-1 text-lg text-center font-bold whitespace-pre-line">Crear tarea</p>
                <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col items-start">
                    @csrf
                    <div class="flex-1 flex flex-col justify-center items-center">

                        <div class="flex flex-col w-full">
                            <label for="task_title">
                                Titulo:
                            </label>
                            <input type="text" id="task_title" name="task_title" value="{{ old('task_title') }}" class="border rounded-md py-1 px-1 w-full">

                            @error('task_title')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="description">
                                Descripcion:
                            </label>
                            <textarea class="border rounded-md py-1 px-1 w-ful" name="description" id="description" cols="30" rows="5">{{old('description')}}</textarea>
                            @error('description')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="date">
                                Fecha:
                            </label>
                            <input type="date" id="date" name="date" value="{{ old('date') }}"
                            class="border rounded-md py-1 px-1 w-full">
                            @error('description')
                                <div class="w-full">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }} <span>{{old('category_id')}}</span></p>
                                </div>
                            @enderror
                        </div for="">

                        <div class="flex flex-col w-full">
                            <label for="category">
                                Categoria:
                            </label>

                            <select name="category_id" id="category_id" class="border rounded-md" s>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->category_name }}</option>
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
