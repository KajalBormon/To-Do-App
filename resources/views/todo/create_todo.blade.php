@extends('layout.app')
@section('title')
    Add To Do Item
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row card-size">
            <div>
                @if(session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h3>ADD TO DO ITEM</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title">Title</label><br>
                            <input type="text" name="title" id="" class="form-control">
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-3">
                            <label for="description">Description</label><br>
                            <input type="text" name="description" id="" class="form-control">
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
