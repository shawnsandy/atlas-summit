@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-9">
            @component("dash::components.panels.dashboard")
                {{ Form::editForm('App\Sponsor', "sponsors") }}
            @endcomponent
        </div>
        <div class="col-md-3">
            @component("dash::components.panels.widget", ["title" => "Sponsors List"]);
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!</p>
            @endcomponent
        </div>
    </div>

@endsection
