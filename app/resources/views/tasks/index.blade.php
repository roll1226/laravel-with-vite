<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/scss/app.scss', 'resources/ts/app.ts'])
</head>

<body class="antialiased" id='app'>
    <form action="{{ route('tasks.create') }}">
        {{ csrf_field() }}
        <input type="text" name='context' placeholder="context" />
        <br>
        <input type="number" name="status" placeholder="status" />
        <br>
        <button type="submit">create</button>
    </form>
    <hr />
    @foreach ($tasks as $task)
        <task-component context={{ $task->context }} :status={{ $task->status }}
            task-route={{ route('tasks.show', ['task' => $task]) }}></task-component>
    @endforeach
</body>

</html>
