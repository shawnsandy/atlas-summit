@extends("dash::layouts.layout")
@section("content")

<div class="container-fluid">
    <div class="col-md-9 form-component">
        {{ $slot }}
    </div>
    <div class="col-md-3">
       {{ $sidebar }}
    </div>
</div>

@endsection
