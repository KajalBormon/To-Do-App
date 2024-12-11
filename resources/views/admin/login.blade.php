@extends('layout.app')
@section('title')
    Login
@endsection

@section('content')
<div class="container mt-5">
    <div>
        @if(session('status'))
        <div class="alert alert-danger text-center">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="row card-size">
        <div class="card">
            <div class="card-header text-center">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('login.access') }}" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="Email">Email</label><br>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

            </div>
            <div class="card-footer">
                <div class="button d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Login</button>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
