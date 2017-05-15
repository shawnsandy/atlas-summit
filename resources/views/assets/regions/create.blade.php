@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-8 form-component">
            @component("dash::components.panels.dashboard", ["title" => "Regions"])
                {{ Form::createForm('App\Regions', "sponsors") }}
            @endcomponent
        </div>
        <div class="col-md-4">
            @component("dash::components.panels.widget", ["title" => "Sponsors List"])
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
            @endcomponent
        </div>
    </div>

@endsection
