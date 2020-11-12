<div>
    @if (session()->has('message'))
        <div class="py-4 px-10 bg-teal-500 text-white rounded">
            {{ session()->get('message') }}
        </div>

    @elseif ($errors->any())
        <div class="py-4 px-10 bg-red-500 text-white rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
