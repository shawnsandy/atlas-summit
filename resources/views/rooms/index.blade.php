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
                    <div class="panel-heading">
                        Rooms Overview
                        <a href="/admin/rooms/create" class="btn btn-primary pull-right"><i class="fa fa-plus"> Add New</i></a>
                    </div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Capacity</td>
                                <td>Created</td>
                                <td>Edit\Delete</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ $room->capacity }}</td>
                                    <td>{{ date('F d, Y g:i A', strtotime($room->created_at)) }}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <a href="/admin/rooms/{{ $room->id }}/edit" type="button" class="btn btn-default">Edit</a>
                                            <a data-target="#modal-{{ $room->id }}" data-toggle="modal" type="button" class="btn btn-default">Delete</a>

                                            <div class="modal fade" id="modal-{{ $room->id }}"
                                                 tabIndex="-1">
                                                <div class="modal-dialog" style="width: 50%; height: 80%">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">
                                                                ×
                                                            </button>
                                                            <h4 class="modal-title">Are you sure?</h4>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h3>Are you sure you want to remove {{ $room->name }}?</h3>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="post" action="/admin/regions/{{ $room->id }}"> {{method_field('DELETE')}} {{csrf_field()}}
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Go Back
                                                                </button>
                                                                <button class="btn btn-danger" type="submit">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
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