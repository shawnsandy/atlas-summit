<input type="hidden" name="_token" value="{{ csrf_token() }}">
<p>
    <label class="required" for="company_name">
        Company / Sponsor Name
    </label>
@if ($errors->has('company_name'))<p class="alert alert-danger"
                                     style="font-weight: bold;">{!!$errors->first('company_name')!!}</p>@endif
{!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Contact Name']) !!}
</p>

<p>
    <label class="required" for="sponsor_url">
        Sponsor Website
    </label>
@if ($errors->has('sponsor_url'))<p class="alert alert-danger"
                                    style="font-weight: bold;">{!!$errors->first('sponsor_url')!!}</p>@endif
{!! Form::text('sponsor_url', null, ['class' => 'form-control', 'placeholder' => 'https://google.com']) !!}
</p>

<p>
    <label class="required" for="banner_image">
        Banner Image
    </label>
@if(!empty($sponsor->banner_image) && file_exists(base_path().'/public/img/sponsors/banners/' .  $sponsor->banner_image))
    <p><img src="/img/sponsors/banners/{{ $sponsor->banner_image }}" width="300px"></p>
@endif
@if ($errors->has('banner_image'))<p class="alert alert-danger"
                                     style="font-weight: bold;">{!!$errors->first('banner_image')!!}</p>@endif
{!! Form::file('banner_image', null, ['class' => 'form-control']) !!}
</p>
<p>
    <label class="required" for="logo">
        Logo {{ $sponsor->logo or "" }}
    </label>
@if(!empty($sponsor->logo) && file_exists(base_path().'/public/img/sponsors/logos/' .  $sponsor->logo))
    <p><img src="/img/sponsors/logos/{{ $sponsor->logo }}" width="300px"></p>
@endif
@if ($errors->has('logo'))<p class="alert alert-danger"
                             style="font-weight: bold;">{!!$errors->first('logo')!!}</p>@endif
{!! Form::file('logo', null, ['class' => 'form-control']) !!}
</p>


<p>
    <label class="required" for="sponsor_level">
        Sponsor Level
    </label>
@if ($errors->has('sponsor_level'))<p class="alert alert-danger"
                                      style="font-weight: bold;">{!!$errors->first('sponsor_level')!!}</p>@endif
{!! Form::select('sponsor_level', config("settings.sponsors.levels"), null, ['class' => 'form-control', 'placeholder' => 'Please Select...']) !!}
</p>
<hr>
<p class="lead">Sponsor Info</p>
<hr>


<p>
    <label class="required" for="contact_name">
        Contact Name
    </label>
@if ($errors->has('contact_name'))<p class="alert alert-danger"
                                     style="font-weight: bold;">{!!$errors->first('contact_name')!!}</p>@endif
{!! Form::text('contact_name', null, ['class' => 'form-control', 'placeholder' => 'Contact Name']) !!}
</p>
<p>
    <label class="required" for="contact_email">
        Contact Email Address
    </label>
@if ($errors->has('contact_email'))<p class="alert alert-danger"
                                      style="font-weight: bold;">{!!$errors->first('contact_email')!!}</p>@endif
{!! Form::email('contact_email', null, ['class' => 'form-control', 'placeholder' => 'Contact Email Address']) !!}
</p>
<p>
    <label class="required" for="contact_phone">
        Contact Phone
    </label>
@if ($errors->has('contact_phone'))<p class="alert alert-danger"
                                      style="font-weight: bold;">{!!$errors->first('contact_phone')!!}</p>@endif
{!! Form::text('contact_phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
</p>

<?php
if (isset($sponsor)) {
    $address = $sponsor->company_address;
} else {
    $address = null;
}
?>
@include('assets.dashboard.address')
<p>
    <label class="required" for="company_phone">
        Company Phone
    </label>
@if ($errors->has('company_phone'))<p class="alert alert-danger"
                                      style="font-weight: bold;">{!!$errors->first('company_phone')!!}</p>@endif
{!! Form::text('company_phone', null, ['class' => 'form-control', 'placeholder' => '(XXX) XXX-XXXX']) !!}
</p>
<p>
    <label class="required" for="company_email">
        Company Email Address
    </label>
@if ($errors->has('company_email'))<p class="alert alert-danger"
                                      style="font-weight: bold;">{!!$errors->first('company_email')!!}</p>@endif
{!! Form::email('company_email', null, ['class' => 'form-control', 'placeholder' => 'Company Email Address']) !!}
</p>

<p>
    <label class="required" for="sponsor_description">
        Sponsor Description
    </label>
@if ($errors->has('sponsor_description'))<p class="alert alert-danger"
                                            style="font-weight: bold;">{!!$errors->first('sponsor_description')!!}</p>@endif
{!! Form::textarea('sponsor_description', null, ['class' => 'form-control', 'placeholder' => 'Sponsor Description']) !!}
</p>
