@extends('todos/layout')

@section('content')
    <div class="border-b border-teal-500 py-3">

        <h1 class="text-2xl">So what next you need TO-DO</h1>

        <x-Flash />
    </div>

    <form class=" pt-3" action="{{ route('todo.store') }}" method="POST">
        @csrf

        <div class="flex justify-center items-center border-b border-teal-500 py-2 ">

            <input
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                type="text" placeholder="Letus statr" name=" title">
        </div>

        <div class="flex justify-center items-center border-b border-teal-500 py-2 ">
            <textarea name="description" id=""
                class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                placeholder="descripe your task"></textarea>

        </div>

        <div class="flex justify-between items-center pt-2 ">

            <button
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 hover:border-teal-700 text-sm  text-white py-1 px-2 rounded"
                type="submit">
                Create
            </button>
            <a href="{{ route('todo.index') }}"
                class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded mx-2">
                Back
            </a>
        </div>

    </form>

@endsection
