@extends('page::page-layouts.main-page')

@section('title', "Edit User Bios")

@section('content')
    <div class="container">
        @include("extras::partials.messages")
        <div class="row">
            <div class="">


                    <div class="col-md-8 col-ms-offser-2">
                        <h2>
                            <img class="img-circle" src="/extras/glide/public/{{ $bio->avatar }}/?w=60&h=60&fit=crop-center" alt="Avatar">

                            Edit Your Bio!
                            <hr>
                        </h2>

                        <div class="form edit-bio">

                            {{ Form::model($bio, ["url" => "/summit/bios/$bio->id", 'files' => true, "method" => "put"]) }}
                            @include("partials.bios.bois-form")
                            {{ Form::close() }}

                        </div>
                    </div>


            </div>

        </div>
    </div>
@endsection
