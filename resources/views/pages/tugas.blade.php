@extends('layout.main')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <p class="text-center">Klik
            <a href="{{ route('data') }}">parsing data</a>
            untuk melihat parsing data atau ketikkan "hakim.c1.is/data" pada url
        </p>
    </div>
@endsection
