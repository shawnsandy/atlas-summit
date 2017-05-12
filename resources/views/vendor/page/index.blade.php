@extends('page::page-layouts.default')
@section('title', 'Laravel Pages')
@section('body')



    @include('page::shared.cover-fold', ["class_name" => "landing bg-5"])

    <section class="sub-header text-center">

        <div class="container">
            <h1>
                2017 Workforce Professional Development Summit
            </h1>
            <p class="lead">
                The 2017 Workforce Professional Development Summit will be held October 23 – 25 at the Hyatt Regency
                Grand Cypress in Orlando. We are working hard on a brand new website so please check back soon.
            </p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                Speakers
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, aperiam deleniti deserunt dolorem
                doloribus harum hic id magnam magni maxime neque perspiciatis quisquam quod reprehenderit.
            </p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                Events
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, aperiam deleniti deserunt dolorem
                doloribus harum hic id magnam magni maxime neque perspiciatis quisquam quod reprehenderit.
            </p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                Schedule
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, aperiam deleniti deserunt dolorem
                doloribus harum hic id magnam magni maxime neque perspiciatis quisquam quod reprehenderit.
            </p>
        </div>
    </section>

    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                2017 Sponsors
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, aperiam deleniti deserunt dolorem
                doloribus harum hic id magnam magni maxime neque perspiciatis quisquam quod reprehenderit.
            </p>
        </div>
    </section>

    <hr>
    <section>
        <div class="container"><p class="h1 text-center">
                Venue
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam, aperiam deleniti deserunt dolorem
                doloribus harum hic id magnam magni maxime neque perspiciatis quisquam quod reprehenderit.
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
        background-image: url("/img/Hyatt-Regency.jpg");
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
