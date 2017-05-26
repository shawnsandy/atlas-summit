@extends('page::page-layouts.main-page')

@section('title', "Edit User Bios")

@section('content')
    <div class="container">
        @include("extras::partials.messages")
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-md-8">
                        <h2>Edit your Bio</h2>

                        <div class="form edit-bio">
                            {{ Form::model($bio, ["url" => "/summit/bios/$bio->id", 'files' => true]) }}

                            {{ Form::dashFields('App\Bio') }}
                            <p class="text-right">
                                <button class="btn btn-primary">Update Your Bio</button>
                            </p>
                            {{ Form::close() }}

                        </div>
                    </div>

                    <div class="col-md-4">
                        @include("components.bio-sidebar")
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
