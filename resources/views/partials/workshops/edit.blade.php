@extends("dash::layouts.layout")
@section("content")

    <div class="container-fluid">
        <div class="col-md-8 form-component">
            @component("dash::components.panels.dashboard", ["title" => "Add Workshops"])

                {{ Form::model($workshop, ["url" => "/dashboard/workshops/$workshop->id", 'method' => "PUT"]) }}
                {{ Form::dashFields('App\Workshop') }}
                <p>
                    <button type="submit" class="btn btn-primary">Update</button>
                </p>
                {{ Form::close() }}

            @endcomponent
        </div>
        <div class="col-md-4">
            @component("dash::components.panels.widget", ["title" => "Current Workshop"])
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, vitae!
                <hr>
                <a href="/dashboard/workshops/create" class="btn btn-primary">Create a Workshop</a>
            @endcomponent
        </div>
    </div>

@endsection
@push('scripts')
<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css"></script>
<script type="text/javascript">
    $(function () {
        $('input[name="date"]').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "minDate": moment()
        }, function (start, end, label) {
            console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        });
    });
</script>
@endpush
