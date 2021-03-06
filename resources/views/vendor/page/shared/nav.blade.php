<nav class="navbar navbar-static-top">

    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-2x fa-bars"></i>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/wpds@200.png" alt="Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right oswald">

                @if(Auth::check())
                    <li>
                        <a href="{{ url('/summit/bios') }}">{{ $current_user->full_name }}</a>
                    </li>
                @endif

                <li>
                    <a href="/summit/u">Workshops</a>
                </li>
                <li>
                    <a href="{{ url('/page/about') }}">About</a>
                </li>
                <li>
                    <a href="{{ url('/page/contact') }}">Contact</a>
                </li>

            </ul>
        </div>

    </div>

</nav>
