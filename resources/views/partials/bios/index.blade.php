@extends('theme.page.page-layouts.main-page')

@section('title', "Workshop Scheulde")

@section('content')
    <div class="container">
        <div class="row">

            @if(count($user_info))
                <div class="text-center">
                    <p class="h1 oswald">
                        <img class="img-circle"
                             src="/extras/glide/public/{{ $user_info->bio->avatar or "" }}/?h=140&w=140&fit=crop-center"
                             alt="">
                    </p>
                    <p class="text-center">
                        <a href="/summit/bios/{{ Auth::id() }}/edit" class="btn btn-default btn-sm">Edit Bios</a>
                    </p>
                    <p class="h1 oswald">{{ $user_info->full_name }}</p>
                    <h3 class="oswald text-center text-uppercase">Summit Scheulde</h3>

                </div>

                <div class="col-md-8 col-md-offset-2 lead">
                    <hr>
                    @if(count($user_info->workshops))
                        @foreach($user_info->workshops as $workshop)
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="lead">
                                        <a href="/summit/u/{{ $workshop->id }}">{{ $workshop->name }}</a>
                                    </p>
                                    <div class="">
                                        <a href="/summit/u/{{ $workshop->id }}" class="btn btn-primary">View
                                            Workshop</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-right">
                                        <i class="fa fa-calendar"></i> {{ $workshop->date }}
                                        <i class="fa fa-clock-o"></i> {{ $workshop->start_time }}
                                    </p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @endif
                </div>
            @endif
        </div>
        {{--{{ dump($user_info) }}--}}
    </div>
@endsection
