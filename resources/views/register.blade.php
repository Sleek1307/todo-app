@extends('layouts.auth');
@section('block_files')
    ;
    {{-- DOM manipulaition --}}
    @vite('resources/js/register.js')
    {{-- Styles --}}
    @vite('resources/css/register.css')
@endsection
@section('form')
    <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560] pb-12">Crear cuenta</h1>
    <form action="{{ route('auth.register') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-start justify-center input-wrapper">
                <label for="name" class="text-sm font-bold text-[#353560]">Nombre</label>
                <img src="{{ asset('Svg/All/linear/user.svg') }}" alt="name" class="input-icon">
                <input name="name" id="name" type="text" placeholder="your name"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <div class="flex flex-col items-start justify-center input-wrapper">
                <label for="email" class="text-sm font-bold text-[#353560]">Email</label>
                <img src="{{ asset('Svg/All/linear/attach-circle.svg') }}" alt="email" class="input-icon">
                <input name="email" id="email" type="text" placeholder="your email"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>

            <div class="flex flex-col items-start justify-center input-wrapper">
                <label for="password" class="text-sm font-bold text-[#353560]">Contraseña</label>
                <img src="{{ asset('Svg/All/linear/eye-slash.svg') }}" alt="password" class="input-icon" id="password_icon">
                <input name="password" id="password" type="password" placeholder="Ingresa tu contraseña"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <div class="flex flex-col items-start justify-center input-wrapper">
                <label for="password_confirmation" class="text-sm font-bold text-[#353560]">Confirmar contraseña</label>
                <img src="{{ asset('Svg/All/linear/eye-slash.svg') }}" alt="password" class="input-icon"
                    id="password_confirmation_icon">
                <input name="password_confirmation" id="password_confirmation" type="password"
                    placeholder="Ingresa tu contraseña" class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <button type="submit"
                class="border h-[35px] px-3 mt-3 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                Registrar
            </button>
        </div>
    </form>

    @if ($errors)
        <p>{{ $errors }}</p>
    @endif
@endsection

@section('message')
    <h2 class="font-bold text-3xl w-[100%] text-left whitespace-pre-line">Bienvenido a la
        To Do app</h2>
    <p class="font-extralight text-2xl w-[100%] text-left whitespace-pre-line">Registrate para que comience la
        diversion.</p>
    <img src="{{ asset('Svg/All/linear/work_icon.svg') }}" alt="">
@endsection
