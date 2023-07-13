<!-- login.blade.php -->
@extends('layout')

@section('title', 'Halaman Login')

@section('content')

<div class="body-login">
    
    <div class="logo">
            <a href="{{ route('login') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo">
            </a>
    </div>

    <div class="head-login">
    <h1>Unlimited Movies, TV Shows, and more</h1>
    <h2>Watch anywhere only on FreeM</h2>
    </div>

    <div class="form-login">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    
        <div class="input-login">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>

        <div class="input-login">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="button-login">
            <a href="{{ route('index') }}" class="button">Login</a>
        </div>
    </form>
</div>
</div>

@endsection