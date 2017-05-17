@extends('layouts.dashboard')
@section('title', 'Workshops')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Workshops</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Elements</div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <table class="table datatables">
                                <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Created</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($workshops as $workshop)
                                    <tr>
                                        <td>{{ $workshop->id }}</td>
                                        <td>{{ $workshop->name }}</td>
                                        <td>{{ $workshop->created_at }}</td>
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