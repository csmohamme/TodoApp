<div>
    @if (session()->has('message'))
        <div class="py-4 px-10 bg-blue-500 text-white">
            {{ session()->get('message') }}
        </div>
    @elseif(session()->has('error'))
        <div class="py-4 px-10 bg-red-500 text-white">
            {{ session()->get('error') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="py-4 px-10 bg-red-500 text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
