@extends('todos/layout')

@section('content')

    <div class="flex justify-between items-center border-b border-teal-500 py-2 px-4">
        <h1 class="text-2xl">this is all Todos</h1>
        <a href="/todos/create" class=" text-teal-500 text-sm  text-white py-1 px-2  mx-5">
            <span class="fas fa-plus-circle" style="font-size: 2em"></span>
        </a>
    </div>
    <x-Flash />


    <ul class="my-3">

        @foreach ($todos as $todo)
            <li class="flex justify-between py-2  border-b border-gray-500">
                @include('todos.completeButton')

                @if ($todo->completed)
                    <p class="line-through px-20">{{ $todo->title }}</p>
                @else
                    <p class="px-20">{{ $todo->title }}</p>

                @endif
                <div>
                    <a href="{{ 'todos/' . $todo->id . '/edit' }} "><span class="fas fa-edit text-teal-400 px-4"></span></a>
                    <span onclick="event.prevetDefault;
                            if(confirm('Are you really wana delete?')){
                                document.getElementById('form-delete-{{ $todo->id }}').submit()
                            }
                            " class="fas fa-trash text-red-400 px-4 cursor-pointer"></span>
                    <form action="{{ route('todo.destroy', $todo->id) }}" id="{{ 'form-delete-' . $todo->id }}"
                        class="display-none" method="post">
                        @csrf
                        @method('delete')
                    </form>
                </div>
            </li>
        @endforeach

    </ul>

@endsection
