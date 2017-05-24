@extends('page::page-layouts.default')
@section('title', 'Laravel Pages')
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

                            {{ Form::dashCustomFields([
                            "email" => ["label" => "Your email address", "type" => "email"],
                            "password" => ["label" => "Your Password", "type" => "password"],
                            ], 'users') }}
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

                @component("components.workshop-collections")
                    Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent

                @component("components.workshop-collections")
                        Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent

                @component("components.workshop-collections")
                        Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent

                @component("components.workshop-collections")
                        Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent

                @component("components.workshop-collections")
                        Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent

                @component("components.workshop-collections")
                        Synergistically envisioneer emerging results rather than bleeding-edge services. Globally orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative leadership through functionalized.
                @endcomponent
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
        <hr>
    </section>

    @include('page::shared.footer')

@endsection

@push('styles')

<style type="text/css">
    .logo {
        display: none;
    }

    .cover-fold {
        /*background-image: url("/img/Hyatt-Regency.jpg");*/
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
