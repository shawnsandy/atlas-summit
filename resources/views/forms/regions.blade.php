<input type="hidden" name="_token" value="{{ csrf_token() }}">
<p>
    <label class="required" for="region_number">
        Region Number
    </label>
@if ($errors->has('region_number'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('region_number')!!}</p>@endif
{!! Form::text('region_number', null, ['class' => 'form-control', 'placeholder' => 'Region Number']) !!}
</p>
<p>
    <label class="required" for="name">
        Region Name
    </label>
@if ($errors->has('name'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('name')!!}</p>@endif
{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Region Name']) !!}
</p>
<?php
if (isset($region)) {
    $address = $region->address;
} else {
    $address = null;
}
?>
@include('assets.dashboard.address')
<p>
    <label class="required" for="phone">
        Phone
    </label>
@if ($errors->has('phone'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('phone')!!}</p>@endif
{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
</p>
<p>
    <label class="required" for="website">
        Website
    </label>
@if ($errors->has('website'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('website')!!}</p>@endif
{!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'https://google.com']) !!}
</p>
<p>
    <label class="required" for="logo">
        Logo
    </label>
@if ($errors->has('logo'))<p class="alert alert-danger" style="font-weight: bold;">{!!$errors->first('logo')!!}</p>@endif
{!! Form::file('logo', null, ['class' => 'form-control']) !!}
</p>