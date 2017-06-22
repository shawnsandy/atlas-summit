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
                    <div class="panel-heading">Add A Room</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/rooms']) !!}
                            @include('forms.rooms')
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
@endsection