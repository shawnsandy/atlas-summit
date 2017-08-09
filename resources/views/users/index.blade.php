@extends('layouts.dashboard')
@section('title', 'Sponsors')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Elements</div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Region</td>
                                <td>Registered</td>
                                <td class="">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->region_id }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td class="text-right">
                                        <a href="/admin/users/{{ $user->id }}/edit" type="button" class="btn btn-primary btn-sm text-right" data-toggle="modal">Edit</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @if($current_user->isAn('admin'))
                <div class="panel panel-default">
                    <div class="panel-heading">Register New Users</div>
                    <div class="panel-body">

                        {{ Form::open(["url" => "/admin/users"]) }}

                        @include('forms.user-registration')

                        <div class="form-group text-right clearfix">
                            <button type="submit" class="btn btn-success">Register User</button>
                        </div>

                        {{ Form::close() }}

                    </div>
                    @endif
                </div>
            </div>


            <!-- /.col-->
        </div><!-- /.row -->
    </div>
    @include('assets.dashboard.data_tables')
@endsection
