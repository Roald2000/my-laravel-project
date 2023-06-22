<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
</head>

<body>
    <header>
        <div>
            <h1>Task Manager</h1>
        </div>
        <div>
            <a href="/">Home</a>
            <a href="{{ route('task.create') }}">Create</a>
        </div>
    </header>
    @yield('content')
    @yield('task_items')
</body>

</html>
