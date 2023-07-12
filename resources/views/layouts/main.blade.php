<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do</title>
    @vite('resources/css/app.css')
    @yield("block_files")
    {{-- @vite('resources/js/app.js') --}}
</head>

<body class="bg-[url('../../public/img/background-moon.png')] flex items-center justify-center bg-cover bg-center backdrop-blur-sm h-screen w-screen overflow-hidden">
    @yield("main_content")
</body>