
<div class="form-group">
    <label for="biography">Biography</label>
    {{ Form::textarea("biography", null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="job_title">Job Title</label>
    {{ Form::text("job_title", null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
    <label for="avatar">Avatar (profile photo)</label>
    {{ Form::file("avatar",  ["class" => "form-control file-input"]) }}
</div>


<p class="text-right">
    <button class="btn btn-primary">Save You Bio</button>
</p>

@push("styles")
<style>
    .file-input {
        background-color: lightgrey;
        border-radius: 3px;
    }
</style>
@endpush
