<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

@section('title', 'Halaman Home')


@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}
        </div>
    @endif
    <div class="card-login">
        <h1>Login</h1>
        <form action="{{ route('Login') }}" method="post">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection

@section('footer')
    <p>Copyright &copy; 2024</p>
@endsection
