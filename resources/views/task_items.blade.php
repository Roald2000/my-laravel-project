@extends('index')

@section('task_items')
    <div>
        @foreach ($tasks as $item)
            <p>{{ $item->title }}</p>
            <p>{{ $item->description }}</p>
            <p>{{ $item->status == 1 ? 'Completed' : 'Ongoing' }}</p>
            <div>
                <a href="{{ route('task.edit', ['task' => $item->id]) }}">Edit</a>
                <form action="{{ route('task.destroy', ['task' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
