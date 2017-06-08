@extends('layouts.master')
@section('content')

    <div class="error-message">
        @include('flash::message')
    </div>
        <table class="table">
            <h2>Kies een locatie</h2>

            <tr>
                <th>Naam locatie</th>
                <th>Plaats</th>
                <th>Postcode</th>
                <th>Adres</th>
                <th></th>
            </tr>
            @foreach($locations as $location)

                    <tr class="tr">
                        <th>{{$location->name}} </th>
                        <th>{{$location->place}} </th>
                        <th>{{$location->zipcode}} </th>
                        <th>{{$location->address}} {{$location->housenumber}}</th>
                        <th>
                            <a class="btn btn-info" href="{{ route('pages.location', ['id' => $location['id']]) }}">Geef je op</a>
                        </th>
                    </tr>

            @endforeach
        </table>

@endsection