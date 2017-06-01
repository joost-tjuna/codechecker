@extends('layouts.master')
@section('content')


        <table class="table">
            <h2>Kies een locatie</h2>

            <tr>
                <th>Naam locatie</th>
                <th>Plaats</th>
                <th>Postcode</th>
                <th>Adres</th>
            </tr>
            @foreach($locations as $location)

                    <tr>
                        <th>{{$location->name}} </th>
                        <th>{{$location->place}} </th>
                        <th>{{$location->zipcode}} </th>
                        <th>{{$location->address}} {{$location->housenumber}}</th>
                        <th>
                            <a class="btn btn-info" href="#">Geef je op</a>
                        </th>
                    </tr>

            @endforeach
        </table>

@endsection