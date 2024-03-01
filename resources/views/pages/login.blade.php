@extends('layout.mainlogin')
@section('content')
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-12 mb-2">
                <a href="/user" class="btn btn-primary">Login</a>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
    </p>
@endsection
