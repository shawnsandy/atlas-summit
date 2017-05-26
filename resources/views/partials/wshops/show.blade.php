@extends('page::page-layouts.main-page')
@section('title', "Workshop : {$workshop->name}")
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include("page::partials.messages")
                <div class="col-md-6">

                    <h2 class="oswald text-uppercase">{{ $workshop->name }}</h2>
                    <hr>
                    <p>
                        {{ $workshop->description }}
                    </p>
                    <p>
                    <hr>
                    <p class="text-success">
                        Date {{ $workshop->date }} | Seats {{$workshop->seats}} |
                        Registered {{ $workshop->users_count }} |
                        Available <?= $workshop->seats - $workshop->users_count; ?>
                    </p>
                    <hr>

                    <p class="text-uppercase">

                        @if(!Auth::user())
                            <a href="/" class="btn btn-success btn-lg oswald text-uppercase">
                                Login / Register to access this seminar
                            </a>
                        @endif

                        @if(empty($workshop->users->where('id', Auth::id())))
                            <a href="/summit/ws/{{ $workshop->id }}"
                               class="btn btn-primary btn-lg oswald text-uppercase">
                                Register for this workshop
                            </a>
                        @else
                                <a href="/summit/bios" class="btn btn-success btn-lg oswald">Your Workshop to Agenda</a>
                        @endif

                    </p>

                </div>


                <div class="col-md-6">
                    <div class="card" style="width: 100%; height: 360px; overflow: hidden; background-color: lightgray">

                    </div>
                </div>

            </div>
        </div>


    </section>
@endsection
