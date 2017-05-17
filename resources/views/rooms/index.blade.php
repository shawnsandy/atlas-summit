@extends('layouts.dashboard')
@section('title', 'Rooms')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rooms</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Elements</div>
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
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ $room->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </table>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    @include('assets.dashboard.data_tables')
@endsection