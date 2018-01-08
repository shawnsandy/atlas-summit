@extends("dash::layouts.layout")
@section('title', 'Admin dashboard')
@section("content")

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-9 form-component">
                @component("dash::components.panels.dashboard", ["title" => "Workshop Analytics"])
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda deleniti nihil.</p>
                    <div class="canvas-wrapper">
                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                    </div>
                @endcomponent
            </div>

            <div class="col-md-3">
                @component("dash::components.panels.widget", ["title" => "Sponsors List"])
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
                @endcomponent
            </div>

        </div>

    </div>

@endsection
