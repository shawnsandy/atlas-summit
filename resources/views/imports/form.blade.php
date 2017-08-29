{{ Form::open(['url' => "$url", 'files' => true, "name" => "$url"]) }}
<p class="">
    {{ Form::file("cvs",  ["class" => "form-control file-input"]) }}
</p>
{!! $errors->first('cvs', '<p class="text-danger">:message</p>') !!}
<p class="text-right">
    <button class="btn btn-primary btn-xs">{{ $label or "Import CSV" }}</button>
</p>
{{ Form::close() }}
