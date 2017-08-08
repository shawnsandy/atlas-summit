@extends('layouts.auth')
@section('content')
    <div class="login-page">
        <div class="form">
            <img class="" src="http://workforcesummit.org/wp-content/uploads/2017/02/WPDS-horizontal-web-1024x144.png" width="265px" style="padding-bottom: 20px">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                            <p class="message">Forgot Your Password? <a href="{{ route('password.request') }}">Reset Password</a></p>
                        </div>
                    </div>
                </form>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
        </div>
    </div>
@endsection
