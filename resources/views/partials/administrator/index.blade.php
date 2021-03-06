@extends("dash::layouts.layout")
@section('title', 'Admin dashboard')
@section("content")

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3 text-success">
                @component("components.widgets", ["title" => "Registrations", "icon" => "users"])
                    <p class=""><a href="/users" class="btn btn-success btn-xs">Manage Registrations</a></p>
                @endcomponent
            </div>

            <div class="col-md-3">
                @component("components.widgets", ["title" => "Sponsors" ])
                    <p class=""><a href="/users" class="btn btn-success btn-xs">Manage Sponsors</a></p>
                @endcomponent
            </div>

            <div class="col-md-3">
                @component("components.widgets", ["title" => "Workshops", "icon" => "tv"])
                    <p class=""><a href="/users" class="btn btn-success btn-xs">Manage Workshops</a></p>
                @endcomponent
            </div>

            <div class="col-md-3">
                @component("components.widgets", ["title" => "Regions", "icon" => "location"])
                    <p class=""><a href="/users" class="btn btn-success btn-xs">Manage Regions</a></p>
                @endcomponent
            </div>

        </div>

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
