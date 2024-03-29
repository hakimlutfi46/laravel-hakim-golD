@extends('layout.mainlogin')
@section('head')
    <a href="{{ route('login') }}" class="h1 text-decoration-none"><b>Register</b>Page</a>
@endsection

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ old('name') }}">

        </div>
        @error('name')
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
        @enderror

        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">

        </div>

        @error('email')
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
        @enderror

        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">

        </div>
        @error('password')
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
        @enderror

        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
        </div>

        @error('password_confirmation')
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
        @enderror


        <div class="row">
            <div class="col mb-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form>


    <div class="text-center">
        <p class="text-center">Sudah memiliki akun?
            <a href="{{ route('login') }}" class="text-center text-decoration-none">Login</a>
        </p>

    </div>
@endsection
