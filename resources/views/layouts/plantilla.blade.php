<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do</title>
    @vite('resources/css/app.css')
</head>

<body class="custom-background">
        <div class="blur-background h-full w-full grid place-items-center">
            <div class="grid grid-cols-5 justify-start items-start h-5/6 w-11/12 bg-transparent rounded-3xl border">
                {{-- * INICIO lateral nav bar --}}
                <div class="h-full p-3 dark:bg-gray-100 dark:text-gray-900 rounded-l-3xl">
                    <div class="flex items-center p-2 space-x-4 border-b border-gray-500">
                        <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                            class="w-12 h-12 rounded-full dark:bg-gray-700">
                        <div>
                            <h2 class="text-lg font-semibold">John Doe</h2>
                            <span class="flex items-center space-x-1">
                                <a rel="noopener noreferrer" href="#"
                                    class="text-xs hover:underline dark:text-gray-400">View profile</a>
                            </span>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-700">
                        <ul class="pt-2 pb-4 space-y-1 text-sm">
                            <li class="hover:bg-gray-200 focus:bg-gray-300 text-gray-500 font-bold pl-5">
                                <a rel="noopener noreferrer" href="#"
                                    class="flex items-center p-2 space-x-3 rounded-md">
                                    <img src="{{ asset('Svg/All/linear/home.svg') }}" alt="">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li class="pl-5">
                                <a rel="noopener noreferrer" href="#"
                                    class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-bold">
                                    <img src="{{ asset('Svg/All/linear/clipboard-text.svg') }}" alt="Categorias">
                                    <span>Categorias</span>
                                </a>
                                {{-- * INICIO Categorias --}}
                                <ul class="pb-2 text-[10px] grid grid-cols-4">
                                    <li class="col-start-2 col-span-3">
                                        <a rel="noopener noreferrer" href="#"
                                            class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-semibold ">
                                            <svg width="12" height="12">
                                                <circle cx="6" cy="6" r="6" fill="red" />
                                            </svg>
                                            <span>Estudio</span>
                                        </a>
                                    </li>
                                    <li class="col-start-2 col-span-3">
                                        <a rel="noopener noreferrer" href="#"
                                            class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-semibold ">
                                            <svg width="12" height="12">
                                                <circle cx="6" cy="6" r="6" fill="lightblue" />
                                            </svg>
                                            <span>Trabajo</span>
                                        </a>
                                    </li>
                                    <li class="col-start-2 col-span-3">
                                        <a rel="noopener noreferrer" href="#"
                                            class="flex items-center p-2 space-x-3 rounded-md hover:bg-gray-200 text-gray-500 font-semibold ">
                                            <svg width="12" height="12">
                                                <circle cx="6" cy="6" r="6" fill="yellow" />
                                            </svg>
                                            <span>Hocio</span>
                                        </a>
                                    </li>
                                    <li class="col-start-2 col-span-3">
                                        <a rel="noopener noreferrer" href="#"
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
                                <a rel="noopener noreferrer" href="#"
                                    class="flex items-center p-2 space-x-3 rounded-md">
                                    <img src="{{ asset('Svg/All/linear/calendar-1.svg') }}" alt="Calendario">
                                    <span>Calendario</span>
                                </a>
                            </li>
                            <li class="hover:bg-gray-200 text-gray-500 font-bold pl-5">
                                <a rel="noopener noreferrer" href="#"
                                    class="flex items-center p-2 space-x-3 rounded-md">
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


</body>

<style>
    .custom-background {
        background-image: url('img/background-moon.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .blur-background {
        backdrop-filter: blur(15px);
    }
</style>

</html>
