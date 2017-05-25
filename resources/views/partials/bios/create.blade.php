@extends('page::page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <section class="bios new">
        <div class="container">
            @include("page::partials.messages")
            <div class="row">
                <div class="col-md-8">
                    <h2>
                        Create you bio
                    </h2>
                    <hr>
                    <div class="form">
                        {{ Form::open( ["url" => "/summit/bios/", 'files' => true]) }}

                        {{ Form::dashFields('App\Bio') }}

                        <p class="text-right">
                            <button class="btn btn-primary">Create Your Bio</button>
                        </p>

                        {{ Form::close() }}
                    </div>
                </div>
                <div class="col-md-4">
                    @include("components.bio-sidebar")

                </div>
            </div>
        </div>
    </section>
@endsection
