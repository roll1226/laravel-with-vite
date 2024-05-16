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
    {{ $task->status }}
    {{ $task->context }}
    <form action={{ route('tasks.destroy', $task) }} method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            削除
        </button>
    </form>
</body>

</html>
