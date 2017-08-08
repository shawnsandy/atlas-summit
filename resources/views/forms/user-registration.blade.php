<div class="form-group">
    <label for="first_name">First Name</label>
    {{ Form::text("first_name", null, ["class" => "form-control", 'required', ]) }}
    {!! $errors->first('first_name', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group">
    <label for="last_name">Lat Name</label>
    {{ Form::text("last_name", null, ["class" => "form-control", 'required', ]) }}
    {!! $errors->first('last_name', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group">
    <label for="email">Email Address</label>
    {{ Form::email("email", null, ["class" => "form-control", 'required', ]) }}
    {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
</div>

@if(!isset($user)):
<div class="form-group">
    <label for="update_email">Update Email Address</label>
    {{ Form::email("update_email", null, ["class" => "form-control", 'required', ]) }}
    {!! $errors->first('update_email', '<p class="text-danger">:message</p>') !!}
</div>
@endif

<div class="form-group">
    <label for="role">User Role</label>
    {{ Form::select("role", ["admin" => "Admin", "speaker" => "Speaker", "user" => "User"], null, ["class" => "form-control", "placeholder" => 'Select the user role']) }}
    {!! $errors->first('role', '<p class="text-danger">:message</p>') !!}
</div>
<div class="form-group">
    <label for="region">Career Source Region</label>
    {{ Form::select("region", $regions, null, ["class" => "form-control", "placeholder" => 'Select the user region']) }}
    {!! $errors->first('region', '<p class="text-danger">:message</p>') !!}
</div>

