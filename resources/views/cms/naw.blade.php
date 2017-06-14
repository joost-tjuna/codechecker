@extends('layouts.app')
@section('content')

    <div class="error-message">
        @include('flash::message')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Naw gegevens</h2>
                        <a class="btn btn-primary pull-right new-location" href="/home/excel">Export naar Excel</a>
                    </div>

                    <div class="panel-body">
                        <table >
                            <tr>
                                <th class="location-th"><p>ID</p></th>
                                <th class="location-th"><p>Name</p></th>
                                <th class="location-th"><p>Email</p></th>

                            </tr>
                            @foreach($naws as $naw)
                                <tr>
                                    <th class="location-th">
                                        <p>{{$naw->id}}</p>

                                    </th>
                                    <th class="location-th">
                                        <p>{{$naw->firstname . ' ' . $naw->lastname}}</p>
                                    </th>
                                    <th class="location-th">
                                        <p>{{$naw->email}}</p>
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

@endsection