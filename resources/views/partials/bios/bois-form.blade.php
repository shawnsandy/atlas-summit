
<div class="form-group  {{ $errors->first("biography", "has-error") }}">
    <label for="biography">Biography</label>
    {{ Form::textarea("biography", null, ["class" => "form-control biography"]) }}
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
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endpush

@push("scripts")
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('.biography').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>
@endpush
