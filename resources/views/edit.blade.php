@extends('index')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('task.update', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}">
        <input type="text" name="description" value="{{ $task->description }}">
        <select name="status">
            <option value="0">Ongoing</option>
            <option value="1">Completed</option>
        </select>
        <button type="submit">Update</button>
    </form>
@endsection
