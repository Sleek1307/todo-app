@extends('layouts.main')
@section('main_content')
    <div
        class="bg-[url('../../public/img/background-moon.png')] drop-shadow-2xl w-8/12 h-4/6 flex items-center justify-between rounded-lg">
        <div class="bg-white w-5/12 h-[120%] drop-shadow-lg rounded-lg ms-28 flex items-center justify-center">
            <h1 class="text-4xl font-extrabold drop-shadow-md text-[#353560]">Inicio de sesion</h1>
            <form action=""></form>
        </div>
        <div class="w-5/12 h-[100%] flex flex-col items-center justify-center text-white">
            <h2 class="font-bold text-3xl w-[100%] text-left whitespace-pre-line">Bienvenido a la
                To Do app</h2>
            <p class="font-extralight text-2xl w-[100%] text-left whitespace-pre-line">En esta podras gestionar 
                las tareas de tu dia a dia.</p>
            <img src="{{ asset('Svg/All/linear/work_icon.svg') }}" alt="">
        </div>
    </div>
@endsection
