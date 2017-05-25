@extends('layouts.dashboard')
@section('title', 'Regions')
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
                    <div class="panel-heading">Edit A Sponsor</div>
                    <div class="panel-body">
                        {!! Form::model($sponsor, ['url' => '/admin/sponsors/'. $sponsor->id, 'method' => 'put']) !!}
                            @include('forms.sponsors')
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
@endsectionA