@extends('layouts.dashboard')
@section('title', 'Edit User | '.$user->full_name)
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Users</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->full_name }}</div>
                    <div class="panel-body">
                        {{ Form::model($user, ["url" => "/admin/users/$user->id", "method" => "put"] ) }}
                        {{ Form::hidden('edit', 1) }}
                        @include('forms.user-registration')

                        <div class="form-group text-right clearfix">
                            <button type="submit" class="btn btn-success">Update User Info</button>
                        </div>

                        {{ Form::close() }}
                        <hr>
                        @if(!count($user->workshops))
                            <p class="alert alert-info text-center lead">{{ $user->full_name }} has not signed up for any workshops</p>
                        @else
                            @foreach($user->workkshops as $workshop)
                            <p class="lead">{{$workshop->name}}</p>
                                <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Recently Added Users</div>
                    <div class="panel-body">
                        <table class="table datatables">
                            <thead>
                            <tr>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td class="">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
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


            <!-- /.col-->
        </div><!-- /.row -->
    </div>
    @include('assets.dashboard.data_tables')
@endsection
