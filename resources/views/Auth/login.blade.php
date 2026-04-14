<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('title', 'Halaman Home')


@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}
        </div>
    @endif
    <div class="card-login">
        <div class="head-login">
            <img src="{{ asset('images/Logo Sinar Jaya Inventory.png') }}" alt="Logo">
            <h1>Log in to your account</h1>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>

        <form action="{{ route('Login') }}" method="post">
            @csrf
            <div class="input-email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit">Login</button>
            <button type="submit" class="Log-in-google">
                <img src="{{ asset('images/logo_google.svg') }}" alt="logo" class="logo-img">
                <p>Log in With Google</p>
            </button>

            {{-- <button type="submit" class="Log-in-google">Log in With Google</button> --}}
        </form>
    </div>
@endsection
