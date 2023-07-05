@extends('layouts.auth')

@section('form')
    <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560] pb-12">Inicio de sesion</h1>
    <form action="">
        <div class="flex flex-col items-center justify-center gap-2">
            <div class="flex flex-col items-start justify-center">
                <label for="user_id" class="text-sm font-bold text-[#353560]">Email o Nombre de usuario</label>
                <input name="user_id" id="user_id" type="text" placeholder="email@example.com"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <div class="flex flex-col items-start justify-center">
                <label for="password" class="text-sm font-bold text-[#353560]">Contraseña</label>
                <input name="password" id="password" type="text" placeholder="your password"
                    class="border rounded-md px-2 py-1 w-[300px]">
            </div>
            <div class="flex items-center justify-center gap-5 w-[350px]">
                <button
                    class="border px-4 h-[30px] text-xs text-[#353560] font-extrabold rounded-full shadow hover:bg-[#353560] hover:text-white transition-all duration-300">Recuperar
                    contraseña</button>
                <button
                    class="border px-4 h-[30px] text-xs text-[#353560] font-extrabold rounded-full shadow hover:bg-[#353560] hover:text-white transition-all duration-300">Registrarse</button>
            </div>
            <button
                class="border h-[35px] px-3 mt-6 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                Iniciar sesion
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
