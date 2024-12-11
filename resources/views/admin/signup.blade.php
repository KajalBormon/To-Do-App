@extends('layout.app')
@section('title')
    Sign Up
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
    <div class="row card-size">
        <div class="card">
            <div class="card-header text-center">
                <h3>Sign Up</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('signup') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Your Name</label> <sup class="text-danger">*</sup><br>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="Email">Email</label> <sup class="text-danger">*</sup><br>
                        <input type="email" name="email" id="" class="form-control">
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password">Password</label> <sup class="text-danger">*</sup><br>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password">Confirm Password</label> <sup class="text-danger">*</sup><br>
                        <input type="password" name="password_confirmation" id="" class="form-control">
                    </div>
                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

            </div>
            <div class="card-footer">
                <div class="button d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Sign Up</button>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
