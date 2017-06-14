@extends('layouts.app')
@section('content')
    <div class="error-message">
        @include('flash::message')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Locations</h2>
                    <a class="btn btn-primary pull-right new-location" href="/home/add">Nieuwe locatie</a>
                    </div>

                    <div class="panel-body">
                        <table >
                            <tr>
                                <th class="location-th"><p>Location ID</p></th>
                                <th class="location-th"><p>Location Name</p></th>
                                <th class="location-th"><p>Place</p></th>
                                <th class="location-th"><p>Tickets left</p></th>
                                <th class="location-th"><p>actions</p></th>
                            </tr>
                            @foreach($locations as $location)
                                <tr>
                                    <th class="location-th">
                                        <p>{{$location->id}}</p>

                                    </th>
                                    <th class="location-th">
                                        <p>{{$location->name}}</p>
                                    </th>
                                    <th class="location-th">
                                        <p>{{$location->address. " " . $location->housenumber}}</p>
                                    </th>
                                    <th class="location-th">
                                        <p>{{$location->ticketAmount}}</p>
                                    </th>
                                    <th>
                                        <div class="btn-group btn-dropdown">
                                            <button type="button" class="btn btn-primary drowpdown-toggle" data-toggle="dropdown">Action  <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="btn btn-success" href="/home/locations/{{$location->id}}">Update</a></li>
                                                <li><a class="btn btn-danger" href="/home/delete/{{$location->id}}">Remove</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            @include('layouts.cms_nav')
        </div>
    </div>
    </div>

@endsection