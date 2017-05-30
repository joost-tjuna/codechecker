@extends('layouts.master')
@section('content')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="error-message">
            @include('flash::message')
        </div>

    <div class="content">
        <form class="form-horizontal" role="form" method="POST" action="">
            {{ csrf_field() }}
            <h2 class="">Enter your code here!</h2>
            <input id="code" type="text" class="form-control" name="code" required autofocus>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>

@endsection