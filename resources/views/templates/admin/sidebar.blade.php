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
                <li class="{{ is_active('addteacher') }}"><a href="{{ route('addteacher') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Teacher</a></li>
                <li class="{{ is_active('addclerk') }}"><a href="{{ route('addclerk') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add AR</a></li>
                <li class="{{ is_active('adddean') }}"><a href="{{ route('adddean') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Dean</a></li>
                <li class="{{ is_active('addadmin') }}"><a href="{{ route('addadmin') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Admin</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#departmentactions" class="collapsed{{ is_active_array(['addteacherdept','addclerkdept','adddeandept']) }}">
                <a href="#"><i class="fa fa-building fa-lg"></i> Departments <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="departmentactions">
                <li class="{{ is_active('addteacherdept') }}"><a href="{{ route('addteacherdept') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Teacher Department</a></li>
                <li class="{{ is_active('addclerkdept') }}"><a href="{{ route('addclerkdept') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add AR Department</a></li>
                <li class="{{ is_active('adddeandept') }}"><a href="{{ route('adddeandept') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Dean Department</a></li>
            </ul>
            <li class="{{ is_active('addspecialization') }}">
                <a href="{{ route('addspecialization') }}">
                    <i class="fa fa-pencil-square-o fa-lg"></i> Add Specialization
                </a>
            </li>
        </ul>
    </div>
</div>