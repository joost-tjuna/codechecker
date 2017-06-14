@extends('layouts.app')
@section('content')

    <div class="error-message">
        @include('flash::message')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Alle codes</h2>
                        {{--<a class="btn btn-primary new-location" href="#">Import excel file</a>--}}
                    </div>

                    <div class="panel-body">
                        <form action="{{url('/home/codes')}}" role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <tr>
                                <th>
                                    <label for="Picture" class="col-md-3 control-label">Upload</label>
                                </th>
                                <th>
                                    <div class="col-md-6">
                                        <input type="file" name="import_file" id="import_file"/>
                                    </div>
                                </th>
                                <th>
                                    <input type="submit" class="btn btn-primary" value="upload" />
                                </th>
                            </tr>
                        </form>

                        <table style="margin: auto;">

                            <tr>
                                <th class="location-th"><p>ID</p></th>
                                <th class="location-th"><p>Code</p></th>
                                <th class="location-th"><p>Used</p></th>

                            </tr>
                            @foreach($codes as $code)
                                <tr>
                                    <th class="location-th">
                                        <p>{{$code->id}}</p>

                                    </th>
                                    <th class="location-th">
                                        <p>{{$code->code}}</p>

                                    </th>
                                    <th class="location-th">
                                        <p>{{$code->used}}</p>
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