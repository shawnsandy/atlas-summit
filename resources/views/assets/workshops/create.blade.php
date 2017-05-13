@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-9 form-component">
            @component("dash::components.panels.dashboard", ["title" => "Add Workshops"])
                {{ Form::createForm('App\Workshop', "workshops") }}
            @endcomponent
        </div>
        <div class="col-md-3">
            @component("dash::components.panels.widget", ["title" => "Current Workshop"])
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
            @endcomponent
        </div>
    </div>

@endsection
