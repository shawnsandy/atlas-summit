@extends('page::page-layouts.main-page')
@section('title', "About us")
@section('content')
    <section>
    <div class="container">
        {{ Html::dashMessages() }}
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%; height: 360px; overflow: hidden; background-color: lightgray">

                </div>
            </div>
            <div class="col-md-6">

                <h2 class="oswald text-uppercase">{{ $workshop->name }}</h2>
                <hr>
                <p>
                    {{ $workshop->description }}
                </p>
                <p>
                <hr>
                <p class="small text-success">
                  Date  {{ $workshop->dete }} |  38 Seats | 8 Available
                </p>
                <hr>

                <p>
                    @if(!Auth::user())
                        <a href="/summit/ws/{{ $workshop->id }}" class="btn btn-primary btn-lg oswald text-uppercase">
                            Register for this workshop
                        </a>
                    @else
                        <a href="/" class="btn btn-success btn-lg oswald text-uppercase">
                           Login / Register to access this seminar
                        </a>
                    @endif
                </p>

            </div>

        </div>
    </div>


    </section>
@endsection
