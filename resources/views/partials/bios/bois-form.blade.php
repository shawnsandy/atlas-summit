
<div class="form-group  {{ $errors->first("biography", "has-error") }}">
    <label for="biography">Biography</label>
    {{ Form::textarea("biography", null, ["class" => "form-control"]) }}
    {!! $errors->first('biography', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group {{ $errors->first("job_title", "has-error") }}" >
    <label for="job_title">Job Title</label>
    {{ Form::text("job_title", null, ["class" => "form-control"]) }}
    {!! $errors->first('job_title', '<p class="text-danger">:message</p>') !!}
</div>

<div class="form-group {{ $errors->first("avatar", "has-error") }}">
    <label for="avatar">Avatar (profile photo)</label>
    {{ Form::file("avatar",  ["class" => "form-control file-input"]) }}
    {!! $errors->first('avatar', '<p class="text-danger">:message</p>') !!}
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
