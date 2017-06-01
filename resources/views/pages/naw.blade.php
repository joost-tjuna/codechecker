@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="error-message">
            @include('flash::message')
        </div>
        <div class="col-md-8 naw-data col-md-offset-2">
            <div class="heading">
                <h1>Gegevens invullen</h1>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{url('/check')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Voornaam: </label>

                        <div class="col-md-5">
                            <input id="firstname" type="text" class="form-control" name="firstname" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Achternaam: </label>

                        <div class="col-md-5">
                            <input id="lastname" type="text" class="form-control" name="lastname" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Email: </label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control" name="email" required >
                        </div>
                    </div>

                    <div class="naw-checkbox">
                        <input type="checkbox" name="voorwaarden" required> Akkoord met de algemene voorwaarden<br>
                    </div>

                    <div class="form-group">
                        <button class="bg-primary btn btn-naw">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection