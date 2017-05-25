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
                    <div class="panel-heading">Add A Region</div>
                    <div class="panel-body">
                        {!! Form::model($region, ['url' => '/admin/regions/'. $region->id, 'method' => 'put', 'files' => true]) !!}
                            @include('forms.regions')
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
@endsection