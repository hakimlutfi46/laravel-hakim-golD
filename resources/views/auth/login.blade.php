@extends('layout.mainlogin')

@section('head')
    <a href="{{ route('login') }}" class="h1 text-decoration-none"><b>Login</b>Page</a>
@endsection

@section('content')
    <div class="mb-3 rounded border border-primary">
        <p class="px-3 pt-2 h5">Login Info</p>
        <p class="px-3">
            Email : lutfihakim@gmail.com
            <br>
            Password : 12345678
        </p>
    </div>

    <form action="{{ route('login-proses') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
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
        <div class="row">

            <div class="col-12 mb-2">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>

    <p class="mb-0 text-center">
        Belum punya akun? Silahkan
        <a href="{{ route('register') }}" class="text-center text-decoration-none"> Register</a>
    </p>
@endsection
