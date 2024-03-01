@extends('layout.mainlogin')

@section('head')
    <a href="{{ route('login') }}" class="h1"><b>Login</b>Page</a>
@endsection

@section('content')
    <p class="">Email : lutfihakim@gmail.com</p>
    <p class="">Password : 12345678</p>

    <form action="{{ route('login-proses') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        @error('email')
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
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
            <div class="mb-3" style="margin-top: -1rem">
                <small class="text-danger mb-3">{{ $message }}</small>
            </div>
        @enderror
        <div class="row">

            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>

    <p class="mb-0 text-center">
        Belum punya akun?
        <a href="{{ route('register') }}" class="text-center"> Register</a>
    </p>
@endsection
