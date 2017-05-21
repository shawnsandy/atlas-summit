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
                        {!! Form::open(['url' => '/admin/regions', 'files' => true]) !!}
                        <p>
                            <label class="required" for="region_number">
                                Region Number
                            </label>
                        @if ($errors->has('region_number'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('region_number')!!}</p>@endif
                        {!! Form::text('region_number', null, ['class' => 'form-control', 'placeholder' => 'Region Number']) !!}
                        </p>
                        <p>
                            <label class="required" for="name">
                                Region Name
                            </label>
                        @if ($errors->has('name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('name')!!}</p>@endif
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Region Name']) !!}
                        </p>
                        @include('assets.dashboard.address')
                        <p>
                            <label class="required" for="phone">
                                Phone
                            </label>
                        @if ($errors->has('phone'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('phone')!!}</p>@endif
                        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
                        </p>
                        <p>
                            <label class="required" for="website">
                                Website
                            </label>
                        @if ($errors->has('website'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('website')!!}</p>@endif
                        {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'https://google.com']) !!}
                        </p>
                        <p>
                            <label class="required" for="logo">
                                Logo
                            </label>
                        @if ($errors->has('logo'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('logo')!!}</p>@endif
                        {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                        </p>
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
@endsection