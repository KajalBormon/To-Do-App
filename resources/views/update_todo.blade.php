@extends('layout.app')
@section('title')
    Update TODO Item
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row card-size">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="mb-3">UPDATE TO DO ITEM</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('task.update',$task->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="title">Title</label><br>
                            <input type="text" name="title" id="" class="form-control" value="{{ $task->title }}">
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="description">Description</label><br>
                            <input type="text" name="description" id="" class="form-control" value="{{ $task->description }}">
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                </div>
                <div class="card-footer">
                    <div class="button d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Add Item</button>

                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
