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
                    <div class="panel-heading">Form Elements</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/rooms']) !!}
                        <p>
                            <label class="required" for="first_name">
                                Room Name
                            </label>
                        @if ($errors->has('name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('name')!!}</p>@endif
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Room Name']) !!}
                        </p>
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    @include('assets.dashboard.data_tables')
@endsection