@extends('layouts.nav')

@section('block_files')
    {{-- DOM manipulaition --}}
    @vite('resources/js/register.js')
    {{-- Styles --}}
    @vite('resources/css/register.css')
@endsection

@section('content')
    <div class="p-10">
        <form action="{{ route('profile.update', auth()->user()->id) }}" enctype="multipart/form-data" method="POST">
            @method('put')
            @csrf
            <div class="flex gap-5">
                <div class=" flex flex-col gap-1 items-center p-1 border rounded-xl">
                    <img src="{{ Storage::url(auth()->user()->avatar_url) }}" alt="" id="avatar_img"
                        class="h-[200px] w-[200px] rounded-full">
                    <input type="file" class="rounded-md p-1 w-[300px] text-xs focus:outline-0" id="avatar_url"
                        name="avatar">
                    @error('avatar')
                        <div class="w-100">
                            <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex flex-col">
                        <div class="flex flex-col items-start justify-center">
                            <label for="name" class="text-sm font-bold text-[#ffffff]">Nombre de usuario</label>
                            <div class="input-wrapper">
                                <img src="{{ asset('Svg/All/linear/user.svg') }}" alt="name" class="input-icon">
                                <input name="name" id="name" type="text" placeholder="username"
                                    class="border rounded-md px-2 py-1 w-[300px] focus:outline-0"
                                    value="{{ auth()->user()->name }}">
                            </div>
                            @error('name')
                                <div class="w-100">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="flex flex-col items-start justify-center">
                            <label for="email" class="text-sm font-bold text-[#ffffff]">Email</label>
                            <div class="input-wrapper">
                                <img src="{{ asset('Svg/All/linear/user.svg') }}" alt="name" class="input-icon">
                                <input name="email" id="email" type="text" placeholder="email@example.com"
                                    class="border rounded-md px-2 py-1 w-[300px] focus:outline-0"
                                    value="{{ auth()->user()->email }}">
                            </div>
                            @error('email')
                                <div class="w-100">
                                    <p class=" text-sm font-bold text-red-800">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="w-100 bg-teal-100 p-2 rounded-md">
                            <p class=" text-sm font-bold text-green-600">{{ session('success') }}</p>
                        </div>
                    @endif
                    <button
                        class="border h-[35px] px-3 mt-3 text-md font-bold rounded-full shadow bg-[#353560] text-white hover:bg-white hover:text-[#353560] transition-all duration-200">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
