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
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Regions Overview
                        <a href="/admin/regions/create" class="btn btn-primary pull-right"><i class="fa fa-plus"> Add New</i></a>
                    </div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Created</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($regions as $region)
                                <tr>
                                    <td>{{ $region->id }}</td>
                                    <td>{{ $region->name }}</td>
                                    <td>{{ $region->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    @include('assets.dashboard.data_tables')
@endsection