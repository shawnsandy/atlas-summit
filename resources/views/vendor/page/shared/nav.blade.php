<nav class="navbar navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/wpds@200.png" style="" alt="Logo">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right oswald">
                <li>
                    <a href="/md">Blog</a>
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
