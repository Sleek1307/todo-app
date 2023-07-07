@extends('layouts.main')
@section('main_content')
    <div
        class="bg-[url('../../public/img/background-moon.png')] drop-shadow-2xl w-8/12 h-4/6 flex items-center justify-between rounded-lg">
        <div class="bg-white w-5/12 h-[120%] drop-shadow-lg rounded-lg ms-28 flex flex-col items-center justify-center">
            @yield("form")
        </div>
        <div class="w-5/12 h-[100%] flex flex-col items-center justify-center text-white">
            @yield("message")
        </div>
    </div>
@endsection
