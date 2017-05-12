@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-9 form-component">
            @component("dash::components.panels.dashboard", ["title" => "Add Sponsors"])
                {{ Form::createForm('App\Sponsor', "sponsors") }}
            @endcomponent
        </div>
        <div class="col-md-3">
            @component("dash::components.panels.widget", ["title" => "Sponsors List"])
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
            @endcomponent
        </div>
    </div>

@endsection
