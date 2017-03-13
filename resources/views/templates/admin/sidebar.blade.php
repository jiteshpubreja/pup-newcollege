<div class="nav-side-menu">
    <div class="brand">Admin Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li class="{{ is_active('adminhome') }}">
                <a href="{{ route('adminhome') }}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#useractions" class="collapsed{{ is_active_array(['addteacher','addclerk','adddean','addadmin']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Users <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="useractions">
                <li class="{{ is_active('addteacher') }}"><a href="{{ route('addteacher') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Teacher</a></li>
                <li class="{{ is_active('addclerk') }}"><a href="{{ route('addclerk') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Clerk</a></li>
                <li class="{{ is_active('adddean') }}"><a href="{{ route('adddean') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Dean</a></li>
                <li class="{{ is_active('addadmin') }}"><a href="{{ route('addadmin') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Admin</a></li>
            </ul>
        </ul>
    </div>
</div>