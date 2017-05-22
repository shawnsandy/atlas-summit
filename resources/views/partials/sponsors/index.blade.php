@extends("dash::layouts.layout")
@section("title", "Sponsors Admin")
@section("content")
    <div class="container-fluid">
        <div class="col-md-9">
            @component("dash::components.panels.dashboard", ["title" => "Administrator"])
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda deleniti nihil.</p>
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                </div>
            @endcomponent
        </div>
        <div class="col-md-3">
            @component("components.widgets")
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur at blanditiis eos impedit
                    maxime nesciunt officiis repellat ullam veniam.</p>
            @endcomponent
        </div>

    </div>
@endsection
