<div class="nav-side-menu">
    <div class="brand">College Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li class="{{ is_active('collegehome') }}">
                <a href="{{route('collegehome')}}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#application" class="collapsed{{ is_active_array(['collegenewapply']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Application <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="application">
                <li class="{{ is_active('collegenewapply') }}"><a href="{{ route('collegenewapply') }}"><span class="glyphicon glyphicon-plus-sign"></span> Apply For New College</a></li>
            </ul>
        </ul>
    </div>
</div>