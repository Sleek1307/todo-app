@extends('layouts.auth')
@section('form')
    <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560] pb-12 whitespace-pre-line">Restaurar
        contraseña</h1>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-start justify-center">
                <label for="email" class="text-sm font-bold text-[#353560]">Email</label>
                <input name="email" id="email" type="text" placeholder="email@example.com"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <div class="flex items-center justify-start gap-5 w-[300px]">
                <a href="{{ route('auth.login') }}"
                    class="border px-4 flex items-center h-[30px] text-xs text-[#353560] font-extrabold rounded-full shadow hover:bg-[#353560] hover:text-white transition-all duration-300">Volver
                    a iniciar sesion</a>
            </div>
            
            @if()

            
            @error('email')
                <div class="w-100">
                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                </div>
            @enderror

            <button
                class="border h-[35px] px-3 mt-6 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                Enviar
            </button>
        </div>
    </form>
@endsection

@section('message')
    <h2 class="font-bold text-3xl w-[100%] text-left whitespace-pre-line">¿Olvidaste tu contraseña?</h2>
    <p class="font-extralight text-2xl w-[100%] text-left whitespace-pre-line">Si olvidaste tu contraseña, llena el
        formulario y te enviaremos un correo de restauracion</p>
    <img src="{{ asset('Svg/All/linear/work_icon.svg') }}" alt="">
@endsection
