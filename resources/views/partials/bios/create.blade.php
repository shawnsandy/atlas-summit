@extends('page::page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <section class="bios new">
        <div class="container">
            @include("page::partials.messages")
            <div class="row">

                <h2 class="oswald text-uppercase">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
            </div>


            <div class="col-md-8 col-md-offset-2">
                <h2>
                    Create you bio
                    <hr>
                </h2>

                <div class="form">
                    {{ Form::open( ["url" => "/summit/bios/", 'files' => true]) }}

                    @include("partials.bios.bois-form")

                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </section>
@endsection
