@extends('layout.app')

@section('title')
    All TO DO Items
@endsection

@section('content')
    <div class="container mt-5">
        <div>
            @if(session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <h3 class="text-center" style="color:crimson">ALL TO DO ITEMS</h3>

        @if($tasks->isEmpty())
            <div class="alert alert-info">
                No to-do items available. Start by adding a new to-do item!
            </div>
            <a href="{{ route('task.create') }}" class="btn btn-warning">Add To-Do Item</a>
        @else

        <table class="table table-bordered table-striped">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('task.toggleStatus', $task->id) }}" class="btn btn-sm {{ $task->status == '0' ? 'btn-danger' : 'btn-success' }}">
                            {{ $task->status == '0' ? 'Pending' : 'Completed' }}
                        </a>
                    </td>
                    <td>

                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection
