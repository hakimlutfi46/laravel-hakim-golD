@extends('layout.mainlogin')

@section('head')
    <a href="{{ route('login') }}" class="h1 text-decoration-none"><b>Login</b>Page</a>
@endsection

@section('content')
    <div class="accordion mb-3 rounded" id="loginInfoAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="loginInfoHeading">
                <button class="accordion-button text-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#loginInfoCollapse" aria-expanded="true" aria-controls="loginInfoCollapse">
                    Login Info
                </button>
            </h2>
            <div id="loginInfoCollapse" class="accordion-collapse collapse" aria-labelledby="loginInfoHeading"
                data-bs-parent="#loginInfoAccordion">
                <div class="accordion-body">
                    <p class="px-3 pt-2 h5">Role Admin</p>
                    <p class="px-3">
                        Email : admin123@gmail.com
                        <br>
                        Password : 12345678
                    </p>
                </div>
                <div class="accordion-body">
                    <p class="px-3 pt-2 h5">Role User</p>
                    <p class="px-3">
                        Email : lutfihakim@gmail.com
                        <br>
                        Password : 12345678
                        <br>
                    </p>
                    <p>Silahkan <a href="{{ route('register') }}" class="text-decoration-none">Register</a> jika
                        ingin
                        membuat user baru</p>
                </div>
            </div>
        </div>
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
