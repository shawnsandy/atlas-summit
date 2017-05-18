@extends('layouts.auth')
@section('content')
    <div class="login-page">
        <div class="form">
            <img class="" src="http://workforcesummit.org/wp-content/uploads/2017/02/WPDS-horizontal-web-1024x144.png" width="265px" style="padding-bottom: 20px">
            <div>
                @include('flash::message')
            </div>
                <h1>Welcome</h1>
            <h3>
                Please scan your badge.
            </h3>
            {!! Form::open(['url' => '/scans/rfid']) !!}
            <p>
            {!! Form::text('rfid', null, ['class' => 'form-control', 'placeholder' => 'RFID Scan']) !!}
            </p>
            {{ Form::hidden('room_id', $room_id) }}
            {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
