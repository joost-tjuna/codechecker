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
        @include('layouts.cms_nav')
        </div>
    </div>
</div>
@endsection
