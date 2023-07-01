@extends('layouts.plantilla')

@section('content')
    <div class="col-span-4 px-1">
        <h1 class="pt-2 px-5 text-2xl text-white font-bold">Estas son tus tareas de hoy</h1>
        <h2 class="mt-[-8px] px-6 font-light text-sm text-gray-400">Martes 15 de Febrero</h2>
        <br>
        <div class="grid grid-cols-3 h-4/5">
            <ul class="border-r px-2">
                <span class="text-xl text-white font-semibold">Pendiente</span>
                <li class="rounded-xl border text-white custom-li">
                    <span class="p-2 pl-5 bg-transparent">Resumen de el principe</span>
                    <div>
                        <h2 class="pl-5 text-gray-300">13-00 - 14:00</h2>
                    </div>
                </li>
            </ul>
            <ul class="border-r px-2">
                <span class="text-xl text-white font-semibold">Haciendo</span>
                <li class="rounded-xl border text-white custom-li">
                    <span class="p-2 pl-5 bg-transparent">Resumen de el principe</span>
                    <div>
                        <h2 class="pl-5 text-gray-300">13-00 - 14:00</h2>
                    </div>
                </li>
            </ul>
            <ul class="px-2">
                <span class="text-xl text-white font-semibold">Terminado</span>
                <li class="rounded-xl border text-white custom-li">
                    <span class="p-2 pl-5 bg-transparent">Resumen de el principe</span>
                    <div>
                        <h2 class="pl-5 text-gray-300">13-00 - 14:00</h2>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection

<style>
    .custom-li {
        background-image: linear-gradient(to right, rgb(252 165 165) 5%, transparent 5%)
    }
</style>
