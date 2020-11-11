@extends('todos/layout')

@section('content')

    <div class="flex justify-center items-center border-b border-teal-500 py-2">
        <h1 class="text-2xl">this is all Todos</h1>
        <a href="/todos/create"
            class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 hover:border-teal-700 text-sm  text-white py-1 px-2 rounded mx-5">Create
            Todo</a>
    </div>
    <x-Flash />


    <ul class="my-3">

        @foreach ($todos as $todo)
            <li class="flex justify-center py-2">
                <p>{{ $todo->title }}</p>
                <a href="{{ 'todos/' . $todo->id . '/edit' }}"
                    class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 hover:border-teal-700 text-sm  text-white py-1 px-2 rounded mx-5">Edit</a>
            </li>
        @endforeach

    </ul>

@endsection
