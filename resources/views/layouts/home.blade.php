@extends('layouts.main')

@section('main_content')
    <div class="h-5/6 w-11/12 flex items-center justify-center">
        <div class="flex justify-start items-start h-full w-full bg-transparent rounded-3xl border">
            {{-- * INICIO lateral nav bar --}}
            <div class="h-full w-60  p-3 bg-gray-100 text-gray-900 rounded-l-3xl">
                <div class="flex items-center p-2 space-x-4 border-b border-gray-500">
                    <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                        class="w-12 h-12 rounded-full bg-gray-700">
                    <div>
                        <h2 class="text-lg font-semibold">John Doe</h2>
                        <span class="flex items-center space-x-1">
                            <a rel="noopener noreferrer" href="#" class="text-xs hover:underline text-gray-400">View
                                profile</a>
                        </span>
                    </div>
                </div>
                <div class="divide-y divide-gray-700">
                    <ul class="pt-2 pb-4 space-y-1 text-sm">
                        <li class="hover:bg-gray-200 focus:bg-gray-300 text-gray-500 font-bold pl-5">
                            <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                                <img src="{{ asset('Svg/All/linear/home.svg') }}" alt="">
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li class="pl-5">
                            <a rel="noopener noreferrer" href="{{ route('categories.index') }}"
                                class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-bold">
                                <img src="{{ asset('Svg/All/linear/clipboard-text.svg') }}" alt="Categorias">
                                <span>Categorias</span>
                            </a>
                            {{-- * INICIO Categorias --}}
                            <ul class="pb-2 text-[10px] grid grid-cols-4">

                                @foreach ($categories as $category)
                                    <li class="col-start-2 col-span-3">
                                        <a href="{{ route('categories.show', $category) }}"
                                            class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-semibold ">
                                            <svg width="12" height="12">
                                                <circle cx="6" cy="6" r="6"
                                                    fill="{{ $category->color }}" />
                                            </svg>
                                            <span>{{ $category->category_name }}</span>
                                        </a>
                                    </li>
                                @endforeach


                                <li class="col-start-2 col-span-3">
                                    <a rel="noopener noreferrer" href="{{ route('categories.create') }}"
                                        class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-light ">
                                        <img src="{{ asset('Svg/All/linear/add-circle-modified.svg') }}"
                                            alt="Agregar categoria">
                                        <span>Agregar categoria</span>
                                    </a>
                                </li>
                            </ul>
                            {{-- ! FIN Categorias --}}
                        </li>
                        <li class="hover:bg-gray-200 text-gray-500 font-bold pl-5">
                            <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                                <img src="{{ asset('Svg/All/linear/calendar-1.svg') }}" alt="Calendario">
                                <span>Calendario</span>
                            </a>
                        </li>
                        <li class="hover:bg-gray-200 text-gray-500 font-bold pl-5">
                            <a rel="noopener noreferrer" href="#" class="flex items-center p-2 space-x-3 rounded-md">
                                <img src="{{ asset('Svg/All/linear/document.svg') }}" alt="">
                                <span>Tareas del dia</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- ! FIN lateran nav bar --}}

            {{-- * INICIO Content --}}
            @yield('content')
            {{-- ! FIN Content --}}
        </div>
    </div>
@endsection
