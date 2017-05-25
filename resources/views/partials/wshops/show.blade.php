@extends('page::page-layouts.main-page')
@section('title', "About us")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%; height: 360px; overflow: hidden; background-color: lightgray">

                </div>
            </div>
            <div class="col-md-6">
                <h2>{{ $workshop->name }}</h2>
                <p>
                    {{ $workshop->description }}
                </p>
                <p>
                    @if(Auth::user())
                        <a href="/" class="btn btn-primary btn-lg oswald text-uppercase">
                            Register for this workshop
                        </a>
                    @else
                        <a href="/" class="btn btn-success btn-lg oswald text-uppercase">
                           Login or Register
                        </a>
                    @endif
                </p>
            </div>

        </div>
    </div>
@endsection
