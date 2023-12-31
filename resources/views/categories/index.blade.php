@extends('layouts.nav')

@section('content')
    <div class="h-full aspect-auto flex grow flex-col px-1 m-2 text-white">
        <div class="flex p-3 justify-center">
            <h2 class="pt-1 px-5 text-2xl text-white font-bold">Aqui estan todas tus categorias</h2>
        </div>
        <ul class="flex flex-col w-3/4 h-4/5 items-center place-self-center overflow-auto scrollbar">
            @foreach ($all_categories as $category)
                <a href="{{ route('categories.edit', $category) }}" class="border border-pink-300 rounded-3xl my-2 py-2 px-5 w-4/6">
                    <li class="flex items-center"> <svg width="16" height="16" class="mx-2">
                            <circle cx="8" cy="8" r="8" fill="{{ $category->color }}" />
                        </svg> | {{ $category->category_name }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
