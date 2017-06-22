@extends('page::page-layouts.default')
@section('title', 'Workforce Professional Development Summit 2017')
@section('body')

    @include('theme.page.shared.cover-fold', ["class_name" => "landing bg-5"])

    <section class="sub-header text-center">

        <div class="container">
            <p class="h1">
                2017 Workforce Professional Development Summit
            </p>
            <p class="lead">
                The 2017 Workforce Professional Development Summit will be held October 23 – 25 at the Hyatt Regency
                Grand Cypress in Orlando. We are working hard on a brand new website so please check back soon.
            </p>
        </div>

    </section>
    <section class="actions signup">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p class="h1 text-center">
                        Account Activation
                    </p>

                    <div id="register" class="panel panel-default">
                        <div class="panel-body component">

                            <h3 class="text-center">
                                <img src="/img/wpds.png" alt="Logo">
                            </h3>
                            <hr>

                            {{ Form::open(["url" => '/admin/users']) }}

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
                                    Activate Your Account
                                </button>
                            </p>

                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <p class="h1 text-center">
                Workshops
            </p>

            <div class="workshops">

                @foreach($workshops as $workshop)

                    @component("components.workshop-collections", ["workshop" => $workshop])
                        @if(strlen($workshop->description) > 250)
                            {!! substr($workshop->description, 0, strpos($workshop->description, ' ', 250)) . '...' !!}
                        @else
                            {!! $workshop->description !!}
                        @endif


                    @endcomponent

                @endforeach

            </div>

        </div>
    </section>

    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                2017 Sponsors
            </p>
            <p class="lead">
                Continually pontificate ubiquitous infomediaries rather than inexpensive best practices. Holisticly
                drive progressive niche markets whereas go forward customer service. Phosfluorescently expedite
                technically sound services with client-centered.
            </p>
        </div>

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
