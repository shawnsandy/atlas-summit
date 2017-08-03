@extends('page::page-layouts.default')
@section('title', 'Workforce Professional Development Summit 2017')
@section('body')

    @include('theme.page.shared.cover-fold', ["class_name" => "landing bg-5"])

    <section class="sub-header text-center visible-lg visible-md">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="h1">
                        2017 Workforce Professional Development Summit
                    </p>
                    <p class="lead">
                        The 2017 Workforce Professional Development Summit will be held October 23 – 25 at the Hyatt
                        Regency
                        Grand Cypress in Orlando. We are working hard on a brand new website so please check back soon.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @if(!Auth::check())
        <section class="actions signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="h1 text-center">
                            Account Login
                        </p>

                        <div id="register" class="panel panel-default">
                            <div class="panel-body component">

                                <h3 class="text-center">
                                    <img src="/img/wpds.png" class="img-responsive"
                                         alt="Workforce Professional Development Summit Logo"
                                         style="display: inline-block;">
                                </h3>
                                <hr>

                                {{ Form::open(["url" => '/login']) }}

                                <p class="form-group">
                                    <label for="email">Email</label>
                                    {{ Form::email('email', null, ["class" => "form-control"]) }}
                                </p>

                                <p class="form-group">
                                    <label for="password">Password</label>
                                    {{ Form::password("password", ["class" => "form-control"]) }}
                                </p>

                                <p class="text-right">
                                    <button class="h2 text-uppercase btn btn-block btn-lg btn-primary register oswald">
                                        Login To Your Account
                                    </button>
                                </p>

                                {{ Form::close() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @else
        <hr>
    @endif
    <section class="">
        <div class="container visible-md visible-lg">
            <p class="h1 text-center">
                Workshops
            </p>

            <div class="workshops">

                @foreach($workshops as $workshop)

                    @component("components.workshop-collections", ["workshop" => $workshop])
                        <p>{!! $workshop->short_description !!}</p>
                    @endcomponent

                @endforeach

            </div>

        </div>
        <div class="container visible-sm visible-xs text-center">
            <a href="/summit/u" class="btn btn-lg btn-primary lead">Browse Workshops</a>
        </div>
    </section>

    <hr>
    @if(config("extras.settings.keys.google_maps_api_key"))
        <section class="location visible-md visible-lg">
            <div class="container-">
                <p class="h1 text-center">
                    <span class="fa fa-map-marker"></span> Hyatt Regency Grand Cypress
                </p>

                <p class="lead text-center oswald">
                    1 Grand Cypress Blvd, Orlando, FL 32836
                </p>

                {{ Html::extrasMap("1600 Pennsylvania Ave NW, Washington, DC 20500",
        ["height" => '680px'], ['zoom' => 16, "scroll" => 'false']) }}

            </div>
        </section>
    @endif
    <section>

        @if(count($sponsors))
            <p class="text-center">Sponsors</p>
        @else
            <div class="container">
                <p class="h1 text-center">
                    2017 Sponsors
                </p>
                <p class="lead text-center">
                    Coming Soon
                </p>
            </div>
        @endif

    </section>


    @include('page::shared.footer')

@endsection

@push('styles')

    <style type="text/css">
        .logo {
            display: none;
        }

        .cover-fold {
            background-image: url("/img/Conferencespeaker.jpg");
            background-size: cover;
        }

        .cover .logo {
            color: #fff;
        }
    </style>

@endpush

@push('scripts')

    <script>
        $(document).ready(function () {
            $('.logo').fadeToggle(5000, "linear");
        })
    </script>
@endpush
