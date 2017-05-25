@extends('layouts.dashboard')
@section('title', 'Sponsors')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sponsors</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sponsors Overview
                        <a href="/admin/sponsors/create" class="btn btn-primary pull-right"><i class="fa fa-plus"> Add New</i></a>
                    </div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Company Name</td>
                                <td>Created</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sponsors as $sponsor)
                                <tr>
                                    <td>{{ $sponsor->id }}</td>
                                    <td>{{ $sponsor->company_name }}</td>
                                    <td>{{ date('F d, Y g:i A', strtotime($sponsor->created_at)) }}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <a href="/admin/sponsors/{{ $sponsor->id }}/edit" type="button" class="btn btn-default">Edit</a>
                                            <a data-target="#modal-{{ $sponsor->id }}" data-toggle="modal" type="button" class="btn btn-default">Delete</a>

                                            <div class="modal fade" id="modal-{{ $sponsor->id }}"
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
                                                            <h3>Are you sure you want to remove {{ $sponsor->company_name }}?</h3>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="post" action="/admin/regions/{{ $sponsor->id }}"> {{method_field('DELETE')}} {{csrf_field()}}
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