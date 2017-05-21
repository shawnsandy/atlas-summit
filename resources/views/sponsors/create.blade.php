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
                    <div class="panel-heading">Add A Sponsor</div>
                    <div class="panel-body">
                        {!! Form::open(['url' => '/admin/sponsors', 'files' => true]) !!}
                        <p>
                            <label class="required" for="contact_name">
                                Contact Name
                            </label>
                        @if ($errors->has('contact_name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('contact_name')!!}</p>@endif
                        {!! Form::text('contact_name', null, ['class' => 'form-control', 'placeholder' => 'Contact Name']) !!}
                        </p>
                        <p>
                            <label class="required" for="contact_email">
                                Contact Email Address
                            </label>
                        @if ($errors->has('contact_email'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('contact_email')!!}</p>@endif
                        {!! Form::email('contact_email', null, ['class' => 'form-control', 'placeholder' => 'Contact Email Address']) !!}
                        </p>
                        <p>
                            <label class="required" for="contact_phone">
                                Contact Phone
                            </label>
                        @if ($errors->has('contact_phone'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('contact_phone')!!}</p>@endif
                        {!! Form::text('contact_phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
                        </p>
                        <p>
                            <label class="required" for="company_name">
                                Company Name
                            </label>
                        @if ($errors->has('company_name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('company_name')!!}</p>@endif
                        {!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Contact Name']) !!}
                        </p>
                        @include('assets.dashboard.address')
                        <p>
                            <label class="required" for="company_phone">
                                Company Phone
                            </label>
                        @if ($errors->has('company_phone'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('company_phone')!!}</p>@endif
                        {!! Form::text('company_phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
                        </p>
                        <p>
                            <label class="required" for="company_email">
                                Company Email Address
                            </label>
                        @if ($errors->has('company_email'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('company_email')!!}</p>@endif
                        {!! Form::email('company_email', null, ['class' => 'form-control', 'placeholder' => 'Company Email Address']) !!}
                        </p>
                        <p>
                            <label class="required" for="banner_image">
                                Banner Image
                            </label>
                        @if ($errors->has('banner_image'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('banner_image')!!}</p>@endif
                        {!! Form::file('banner_image', null, ['class' => 'form-control']) !!}
                        </p>
                        <p>
                            <label class="required" for="logo">
                                Logo
                            </label>
                        @if ($errors->has('logo'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('logo')!!}</p>@endif
                        {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                        </p>
                        <p>
                            <label class="required" for="sponsor_description">
                                Sponsor Description
                            </label>
                        @if ($errors->has('sponsor_description'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('sponsor_description')!!}</p>@endif
                        {!! Form::textarea('sponsor_description', null, ['class' => 'form-control', 'placeholder' => 'Sponsor Description']) !!}
                        </p>
                        <p>
                            <label class="required" for="sponsor_url">
                                Sponsor Website
                            </label>
                        @if ($errors->has('sponsor_url'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('sponsor_url')!!}</p>@endif
                        {!! Form::text('sponsor_url', null, ['class' => 'form-control', 'placeholder' => 'https://google.com']) !!}
                        </p>
                        <p>
                            <label class="required" for="sponsor_level">
                                Sponsor Level
                            </label>
                        @if ($errors->has('sponsor_level'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('sponsor_level')!!}</p>@endif
                        {!! Form::select('sponsor_level', ['Silver', 'Gold', 'Titanium'], null, ['class' => 'form-control', 'placeholder' => 'Please Select...']) !!}
                        </p>
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
@endsection