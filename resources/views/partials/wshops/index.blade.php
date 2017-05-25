@extends('page::page-layouts.main-page')
@section('title', "About us")
@section('content')
    <div class="container">
        <section>
            <div class="container">
                @include("extras::partials.messages")
                <p class="h1 text-center">
                    Workshops
                </p>
                <div class="workshops">

                    @foreach($workshops as $workshop)

                        @component("components.workshop-collections", ["workshop" => $workshop])
                            Synergistically envisioneer emerging results rather than bleeding-edge services. Globally
                            orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative
                            leadership through functionalized.
                        @endcomponent

                    @endforeach

                </div>
            </div>
        </section>
    </div>
@endsection
