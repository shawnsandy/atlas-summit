{{ Form::open(['url' => "$url", 'files' => true]) }}
<p class="">
    {{ Form::file("cvs",  ["class" => "form-control file-input"]) }}
</p>
{!! $errors->first('cvs', '<p class="text-danger">:message</p>') !!}
<p class="">
    <button class="btn btn-default">Import</button>
</p>
{{ Form::close() }}
