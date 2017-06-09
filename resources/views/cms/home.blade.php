@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table >
                        <tr>
                            <th class="location-th"><p>Location ID</p></th>
                            <th class="location-th"><p>Location Name</p></th>
                            <th class="location-th"><p>Place</p></th>
                            <th class="location-th"><p>Tickets left</p></th>
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
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            </div>
            <div class="panel pull-left nav-cms col-md-1">
                <table>
                    <tr style="margin-top:5px;">
                        <th>
                            <a href="/home/locations">location</a>
                        </th>
                    </tr>

                    <tr>
                        <th>
                            <hr>

                            <a href="#">Naw</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
