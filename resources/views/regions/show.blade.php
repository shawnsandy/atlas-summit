@extends('layouts.dashboard')
@section('title', 'Regions')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Regions</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $region->name }}</div>
                    <div class="panel-body">
                        <div class="text-center">
                        <img src="/img/regions/{{ $region->logo }}" width="200px">
                        </div>
                        <div>
                            <h3>
                                Region Information:
                            </h3>
                            <p>
                                <strong>Region #:</strong> {{ $region->region_number }}
                            </p>
                            <p>
                                <strong>Phone:</strong> {{ $region->phone }}
                            </p>
                            <p>
                                <strong>Website:</strong> <a href="{{ $region->website }}" target="_blank">{{ $region->website }}</a>
                            </p>
                            <p>
                                <strong>Address:</strong> {{ $region->address }}
                            <div style="width: 100%; height: 500px;">
                                {!! Mapper::render() !!}
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Registered Users({{ count($users) }})</div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Registered</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ date('F d, Y g:i A', strtotime($user->created_at)) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        @include('assets.dashboard.data_tables')
    </div>
@endsection