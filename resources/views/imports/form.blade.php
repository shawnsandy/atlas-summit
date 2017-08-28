{{ Form::open(['url' => "$url", 'files' => true]) }}
<p class="">
    {{ Form::file("cvs",  ["class" => "form-control file-input"]) }}
</p>
<p class="">
    <button class="btn btn-default">Import</button>
</p>
{{ Form::close() }}
