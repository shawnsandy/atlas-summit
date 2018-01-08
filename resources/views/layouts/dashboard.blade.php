@include('assets.dashboard.header')
<div style="display: none">
@include('flash::message')
</div>
@stack('styles')
@include('assets.dashboard.nav')
@include('assets.dashboard.side-bar')

@yield('content')
@include('assets.dashboard.footer')
@stack('scripts')