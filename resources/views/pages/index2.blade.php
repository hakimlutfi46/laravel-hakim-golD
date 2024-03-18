@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3">
                        <h1>Profile User</h1>
                        <br>
                        @foreach (['Nama' => auth()->user()->name, 'Email' => auth()->user()->email, 'Role' => auth()->user()->role] as $label => $value)
                            <p>{{ $label }} : {{ $value }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
