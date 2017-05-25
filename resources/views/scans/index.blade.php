@extends('layouts.auth')
@section('content')
    <div class="login-page">
        <div class="form">
            <p><img src="/img/wpds@200.png" alt="Logo"></p>

            {!! Form::open(['url' => '/scans/room']) !!}
            <p>
                <label class="required" for="room_id">
                    Please pick a Room.
                </label>
            @if ($errors->has('room_id'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('room_id')!!}</p>@endif
            {!! Form::select('room_id', $rooms, null, ['class' => 'form-control', 'placeholder' => 'Pick a room...']) !!}
            </p>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>
    <script type="text/javascript">
        window.onload = function(){
            location.href=document.getElementById("selectbox").value;
        }
    </script>
@endsection
