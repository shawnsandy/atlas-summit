<div class="form-group">
    <label for="first_name">First Name</label>
    {{ Form::text("first_name", null, ["class" => "form-control", 'required', ]) }}
</div>
<div class="form-group">
    <label for="last_name">Lat Name</label>
    {{ Form::text("last_name", null, ["class" => "form-control", 'required', ]) }}
</div>
<div class="form-group">
    <label for="email">Email Address</label>
    {{ Form::email("email", null, ["class" => "form-control", 'required', ]) }}
</div>
<div class="form-group">
    <label for="role">User Type</label>
    {{ Form::select("role", ["admin" => "Admin", "speaker" => "Speaker", "user" => "User"], null, ["class" => "form-control", "placeholder" => 'Select the user type']) }}
</div>
<div class="form-group">
    <label for="region">Career Source Region</label>
    {{ Form::select("region", $regions, null, ["class" => "form-control", "placeholder" => 'Select the user region']) }}
</div>
