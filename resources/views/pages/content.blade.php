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

    <div class="content">
        <form class="form-horizontal" role="form" method="POST" action="">
            <div class="col-md-5">
                <h2 class="label">Enter your code here!</h2>
                <input id="code" type="text" class="form-control" name="code" style="height:40px; width:100%;" required autofocus>
            </div>
        </form>

    </div>

@endsection