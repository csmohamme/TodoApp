@if ($todo->completed)
    <span onclick="event.prevetDefault;document.getElementById('form-incompleted-{{ $todo->id }}').submit()"
        class="fas fa-check px-2 text-teal-400 cursor-pointer"></span>
    <form action="{{ route('todo.incomplete', $todo->id) }}" id="{{ 'form-incompleted-' . $todo->id }}"
        class="display-none" method="post">
        @csrf
        @method('delete')
    </form>
@else
    <span onclick="event.prevetDefault;document.getElementById('form-completed-{{ $todo->id }}').submit()"
        class="fas fa-check px-2 text-gray-300 cursor-pointer"></span>
    <form action="{{ route('todo.complete', $todo->id) }}" id="{{ 'form-completed-' . $todo->id }}" class="display-none"
        method="post">
        @csrf
        @method('put')
    </form>
@endif
