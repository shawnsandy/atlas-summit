@extends('theme.page.page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <div class="container">
        @include("page::partials.messages")
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <aside class="bio">
                    <div class="bio-header text-center" style="min-height: 120px">
                         <p class="h1 oswald">
                           <img class="img-circle" src="/extras/glide/public/{{ $bio->avatar }}/?h=140&w=140&fit=crop-center" alt="">
                        </p>
                        <p class="h1 oswald">
                            {{ $bio->user->full_name }}
                        </p>
                        <hr>
                    </div>
                    <p> {!!  clean($bio->biography) !!} </p>

                </aside>
            </div>
        </div>
    </div>
@endsection
