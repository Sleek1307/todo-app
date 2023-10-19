@extends('layouts.auth')
@section('block_files')
    ;
    {{-- DOM manipulaition --}}
    @vite('resources/js/register.js')
    {{-- Styles --}}
    @vite('resources/css/register.css')
@endsection
@section('form')
    <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560] pb-12 text-center">Crea tu nueva contraseña</h1>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-start justify-center">
                <label for="email" class="text-sm font-bold text-[#353560]">Email</label>
                <div class="input-wrapper">
                    <img src="{{ asset('Svg/All/linear/user.svg') }}" alt="email" class="input-icon">
                    <input name="email" id="name" type="text" placeholder="email@example.com"
                        class="border rounded-md px-2 py-1 w-[300px] focus:outline-0">
                </div>
                @error('email')
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

            <div class="flex flex-col items-start justify-center">
                <label for="password_confirmation" class="text-sm font-bold text-[#353560]">Confirmar contraseña</label>
                <div class="input-wrapper">
                    <img src="{{ asset('Svg/All/linear/eye-slash.svg') }}" alt="password_confirmation" class="input-icon"
                        id="password_confirmation_icon">
                    <input name="password_confirmation" id="password_confirmation" type="password_confirmation"
                        placeholder="Ingresa tu contraseña"
                        class="border rounded-md px-2 py-1 w-[300px] focus:outline-0 focus:border-[#353560] focus:shadow-md">
                </div>
                @error('password_confirmation')
                    <div class="w-[300px]">
                        <p class=" text-sm font-bold text-red-800 break-words">{{ $message }}</p>
                    </div>
                @enderror
            </div>


            @error('status')
                <p class="text-sm font-bold text-red-800">{{ $message }}</p>
            @enderror
    
    
            <button
                class="border h-[35px] px-3 mt-3 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                Enviar
            </button>
        </div>
    </form>
@endsection

@section('message')
    <h2 class="font-bold text-3xl w-[100%] text-left whitespace-pre-line">Bienvenido a la
        To Do app</h2>
    <p class="font-extralight text-2xl w-[100%] text-left whitespace-pre-line">En esta podras gestionar
        las tareas de tu dia a dia.</p>
    <img src="{{ asset('Svg/All/linear/work_icon.svg') }}" alt="">
@endsection
