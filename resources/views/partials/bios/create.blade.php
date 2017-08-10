@extends('page::page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <section class="bios new">
        <div class="container">
            @include("page::partials.messages")
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <h2 class="oswald text-uppercase text-center">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </h2>
                    <hr>
                    <h3 class="text-center">
                        Create you bio
                        <hr>
                    </h3>

                    <div class="form">
                        {{ Form::open( ["url" => "/summit/bios/", 'files' => true]) }}

                        @include("partials.bios.bois-form")

                        {{ Form::close() }}
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
