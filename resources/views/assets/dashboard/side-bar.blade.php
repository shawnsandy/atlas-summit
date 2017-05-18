<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        @if((Request::path() == 'admin'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
            </li>

        @if((Request::path() == 'admin/regions'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="/admin/regions"><svg class="glyph stroked map"><use xlink:href="#stroked-map"/></svg> Regions</a>
            </li>
        @if((Request::path() == 'admin/rooms'))
            <li class="active">
        @else
            <li>
        @endif
            <a href="/admin/rooms"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>
                Rooms</a>
            </li>

        @if((Request::path() == 'admin/sponsors'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="/admin/sponsors"><svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Sponsors</a>
            </li>

        @if((Request::path() == 'admin/users'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="/admin/users"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Users</a>
            </li>

        @if((Request::path() == 'admin/workshops'))
          <li class="active">
        @else
          <li>
        @endif
             <a href="/admin/workshops"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Workshops</a>
          </li>
    </ul>
    <div class="attribution">
        Powered by <a href="http://atlasforworkforce.com/">ATLAS</a><br/>
    </div>
</div><!--/.sidebar-->