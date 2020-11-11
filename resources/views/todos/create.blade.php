<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Todos</title>
</head>

<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">So what next you need TO-DO</h1>
        <x-Flash />
        <form class="py-5" action="/todos/create" method="post">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded">
            <input type="submit" value="Create" class="py-2 px-2 border rounded-lg">
        </form>
    </div>

</body>

</html>
