@extends('layouts.layout')
@section('title', 'login')
@section('page_style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fixed_footer.css') }}">
@endsection

@section('content')
    @if (session('status'))
        <div style="color: green; margin-bottom: 40px;">
            {{ session('status') }}
        </div>
    @endif
    <section class="login">
        <form action="{{route('login') }}" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <h1>Log in</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <label for="email" value="{{ __('Email') }}"></label>
                        <input type="email" id="email"  name="email" :value="old('email')" required autofocus placeholder="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <label for="password" value="{{ __('Password') }}"></label>
                        <input type="password" id="password"  name="password" :value="old('email')" required  autocomplete="current-password" placeholder="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <input type="checkbox" id="remember_me" name="remember">
                        <label for="remember">{{ __('Remember me') }}</label>
                    </div>
                </div>
            </div>
        </form>
    </section>
    
@endsection