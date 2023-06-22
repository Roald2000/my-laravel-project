@extends('index')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="title" id="">
        <input type="text" name="description" id="">
        <select name="status" id="">
            <option value="0">Ongoing</option>
            <option value="1">Completed</option>
        </select>
        <button type="submit">Create</button>
    </form>
@endsection
