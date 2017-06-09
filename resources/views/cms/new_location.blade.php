@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Locations</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{url('/home/add')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"  required autofocus>
                                </div>
                            </div>
<!--  ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- !-->

                            <div class="form-group">
                                <label for="place" class="col-md-4 control-label">Place</label>

                                <div class="col-md-6">
                                    <input id="place" type="text" class="form-control" name="place" required>
                                </div>
                            </div>
<!--  ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- !-->

                            <div class="form-group">
                                <label for="zipcode" class="col-md-4 control-label">zipcode</label>

                                <div class="col-md-6">
                                    <input id="zipcode" type="text" class="form-control" name="zipcode"  required>
                                </div>
                            </div>

<!--  ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- !-->

                            <div class="form-group">
                                <label for="adres" class="col-md-4 control-label">adres</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required>
                                </div>
                            </div>

<!--  ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- !-->

                            <div class="form-group">
                                <label for="housenumber" class="col-md-4 control-label">huisnummer</label>

                                <div class="col-md-6 number">
                                    <input  id="housenumber" type="number" class="form-control" name="housenumber" required>
                                </div>

                                <label for="ticketAmount" class="col-md-4 control-label label-ticket">aantal tickets</label>

                                <div class="col-md-6 number">
                                    <input id="ticketAmount" type="number" class="form-control" name="ticketAmount" required>
                                </div>
                            </div>

<!--  ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- ---- !-->



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Opslaan
                                    </button>
                                </div>

                                <div class="col-md-6 col-md-offset-8 btn-back">
                                    <a class="btn btn-default" href="/home/locations">
                                        Back
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection