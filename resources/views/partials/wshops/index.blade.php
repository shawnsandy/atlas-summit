@extends('theme.page.page-layouts.main-page')
@section('title', "About us")
@section('content')
    <div class="container">
        <div class="row">

            @foreach($workshops as $workshop)

                @component("components.workshop-collections", ["workshop" => $workshop])
                    Synergistically envisioneer emerging results rather than bleeding-edge services. Globally
                    orchestrate distributed results vis-a-vis vertical ideas. Collaboratively create cooperative
                    leadership through functionalized.
                @endcomponent

            @endforeach

        </div>
    </div>
@endsection
