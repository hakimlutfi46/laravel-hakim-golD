@extends('layout.mainlogin')
@section('head')
    <a href="{{ route('login') }}" class="h1"><b>Register</b>Page</a>
@endsection

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ old('name') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        @error('name')
            <div class="text-danger mb-3">{{ $message }}</div>
        @enderror

        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>

        @error('email')
            <div class="text-danger mb-3">{{ $message }}</div>
        @enderror

        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        @error('password')
            <div class="text-danger mb-3">{{ $message }}</div>
        @enderror

        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        @error('password_confirmation')
            <div class="text-danger mb-3">{{ $message }}</div>
        @enderror


        <div class="row">
            <div class="col mb-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form>


    <div class="text-center">
        <a href="{{ route('login') }}" class="text-center">Sudah memiliki akun</a>
    </div>
@endsection
