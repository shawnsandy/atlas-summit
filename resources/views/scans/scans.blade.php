@extends('layouts.auth')
@section('content')
    <div class="login-page">
        <div class="form oswald">
            <img class="" src="/img/wpds@200.png" width="265px" style="padding-bottom: 20px">
                <h1>Welcome</h1>
            <h3>
                Please scan your badge.
            </h3>
            {!! Form::open(['url' => '/scans/rfid']) !!}
                {!! Form::text('rfid', null, ['class' => 'form-control rfid', 'autofocus' => 'autofocus']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ Form::hidden('room_id', $room_id) }}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
