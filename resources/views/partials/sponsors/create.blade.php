@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-8 form-component">

            @component("dash::components.panels.dashboard", ["title" => "Add Sponsors"])
                <div class="sponsors">
                    {{ Form::createForm('App\Sponsor', 'dashboard/users/') }}
                </div>
            @endcomponent

        </div>
        <div class="col-md-4">
            @component("dash::components.panels.widget", ["title" => "Regions Registered"])
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
            @endcomponent
        </div>
    </div>

@endsection
