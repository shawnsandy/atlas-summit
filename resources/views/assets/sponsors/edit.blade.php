@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-9">
            @component("dash::components.panels.dashboard")
                {{ Form::editForm('App\Sponsor', "sponsors") }}
            @endcomponent
        </div>
    </div>

@endsection
