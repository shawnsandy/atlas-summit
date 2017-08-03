@extends('theme.page.page-layouts.main-page')
@section('title', "Workshop : {$workshop->name}")
@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include("page::partials.messages")

                <div class="col-md-6">
                    <div class="card"
                         style="width: 100%; height: 360px; overflow: hidden; background-image: url(/img/workshops/{{ $workshop->cover_image }}); background-position: center center; background-size: cover">


                    </div>
                </div>
                <div class="col-md-6">

                    <h2 class="oswald text-uppercase">{{ $workshop->name }}</h2>
                    <hr>
                    <p>
                        {!! $workshop->description !!}
                    </p>
                    <p>
                    <hr>
                    <p class="text-success">
                        Date {{ $workshop->date }} | Seats {{$workshop->seats}} |
                        Available <?= $workshop->seats - $workshop->users_count; ?>
                    </p>
                    <hr>

                    <p class="text-uppercase">

                        @if(!Auth::user())
                            <a href="/" class="btn btn-success btn-lg oswald text-uppercase">
                                Login / Register to access this seminar
                            </a>
                        @else

                            @if(!$registered)
                                <a href="/summit/ws/{{ $workshop->id }}"
                                   class="btn btn-primary btn-lg oswald text-uppercase">
                                    Register for this workshop
                                </a>
                            @else
                                <a href="/summit/bios" class="btn btn-success btn-lg oswald">Your Workshop to Agenda</a>
                            @endif

                        @endif
                    </p>
                </div>


            </div>
        </div>
    </section>
@endsection
