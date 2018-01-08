{{ Form::open(['url' => "$url", 'files' => true, "name" => "$url"]) }}
<p class="">
    {{ Form::file("cvs",  ["class" => "form-control file-input"]) }}
</p>

<p class="text-right">
    <button class="btn btn-primary btn-sm">{{ $label or "Import CSV" }}</button>
</p>
{{ Form::close() }}
