@extends('todos/layout')

@section('content')
    <div class="border-b border-teal-500 py-3">

        <h1 class="text-2xl">Update ToDo list</h1>

    </div>

    <form class=" pt-3 flex justify-center" action="{{ route('todo.update', $todo->id) }}" method="post">
        @csrf
        @method('patch')

        <div class="flex justify-center items-center border-b border-teal-500 py-2 ">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text" placeholder="Letus statr" value="{{ $todo->title }}" name=" title">
            <button
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 hover:border-teal-700 text-sm  text-white py-1 px-2 rounded"
                type="submit">
                Update
            </button>
            <a href="/todos"
                class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded">
                Back
            </a>
        </div>
    </form>

@endsection
