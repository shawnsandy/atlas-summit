@extends('page::page-layouts.main-page')

@section('title', "User Bios")

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <p class="h1 oswald">
                    <img class="img-circle" src="/extras/glide/public/{{ $user_info->bio->avatar }}/?h=140&w=140&fit=crop-center" alt="">
                </p>
                <p class="h1 oswald">{{ $user_info->full_name }}</p>
                <h3 class="oswald text-center text-uppercase">Summit Scheulde</h3>
                <hr>
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item">
                        Lorem ipsum dolor sit amet.
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    qr-code
                </div>
                <div class="user-info">
                    User Info
                </div>


            </div>
        </div>
        {{ dump($user_info) }}
    </div>
@endsection
