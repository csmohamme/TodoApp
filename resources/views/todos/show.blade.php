@extends('todos/layout')

@section('content')
    <div class="border-b border-teal-500 py-3">

        <h1 class="text-2xl text-left">{{ $todo->title }}</h1>

    </div>
    <div class="border-b border-teal-500 py-3">

        <p class="text-2xl text-left">{{ $todo->description }}</p>
    </div>


    <div class="flex justify-between items-center pt-2 ">

        <a href="{{ route('todo.index') }}"
            class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded mx-2">
            Back
        </a>
    </div>


@endsection
