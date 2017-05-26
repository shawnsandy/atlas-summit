@extends('page::page-layouts.main-page')

@section('title', "Edit User Bios")

@section('content')
    <div class="container">
        @include("extras::partials.messages")
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-md-8">
                        <h2>
                            Edit your Bio
                            <hr>
                        </h2>

                        <div class="form edit-bio">
                            {{ Form::model($bio, ["url" => "/summit/bios/$bio->id", 'files' => true]) }}
                            @include("partials.bios.bois-form")
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
