@extends('layouts.auth')
@section('block_files')
    {{-- DOM manipulaition --}}
    @vite('resources/js/register.js')
    {{-- Styles --}}
    @vite('resources/css/register.css')
@endsection
@section('form')
    <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560] pb-12">Inicio de sesion</h1>
    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-start justify-center">
                <label for="name" class="text-sm font-bold text-[#353560]">Email o Nombre de usuario</label>
                <div class="input-wrapper">
                    <img src="{{ asset('Svg/All/linear/user.svg') }}" alt="name" class="input-icon">
                    <input name="name_or_email" id="name" type="text" placeholder="email@example.com"
                        class="border rounded-md px-2 py-1 w-[300px] focus:outline-0">
                </div>
                @error('name_or_email')
                    <div class="w-100">
                        <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                    </div>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center">
                <label for="password" class="text-sm font-bold text-[#353560]">Contraseña</label>
                <div class="input-wrapper">
                    <img src="{{ asset('Svg/All/linear/eye-slash.svg') }}" alt="password" class="input-icon"
                        id="password_icon">
                    <input name="password" id="password" type="password" placeholder="Ingresa tu contraseña"
                        class="border rounded-md px-2 py-1 w-[300px] focus:outline-0 focus:border-[#353560] focus:shadow-md">
                </div>
                @error('password')
                    <div class="w-[300px]">
                        <p class=" text-sm font-bold text-red-800 break-words">{{ $message }}</p>
                    </div>
                @enderror
            </div>

            @error('0')
                <p class="text-sm font-bold text-red-800">{{ $message }}</p>
            @enderror

            @if (session('success'))
                <div class="w-100 bg-teal-100 p-2 rounded-md">
                    <p class=" text-sm font-bold text-green-600">{{session('success')}}</p>
                </div>
            @endif

            <button
                class="border h-[35px] px-3 mt-3 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                Iniciar sesion
            </button>
        </div>
    </form>


    <div class="flex items-center justify-center gap-5 mt-4 w-[350px]">
        <a href="{{ route('password.request') }}"
            class="border px-4 flex items-center h-[30px] text-xs text-[#353560] font-extrabold rounded-full shadow hover:bg-[#353560] hover:text-white transition-all duration-300">Recuperar
            contraseña</a>
        <a href="{{ route('auth.register') }}"
            class="border px-4 flex items-center h-[30px] text-xs text-[#353560] font-extrabold rounded-full shadow hover:bg-[#353560] hover:text-white transition-all duration-300">Registrarse</a>
    </div>
@endsection

@section('message')
    <h2 class="font-bold text-3xl w-[100%] text-left whitespace-pre-line">Bienvenido a la
        To Do app</h2>
    <p class="font-extralight text-2xl w-[100%] text-left whitespace-pre-line">En esta podras gestionar
        las tareas de tu dia a dia.</p>
    <img src="{{ asset('Svg/All/linear/work_icon.svg') }}" alt="">
@endsection
