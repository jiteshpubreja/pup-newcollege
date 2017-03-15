<div class="nav-side-menu">
    <div class="brand">Clerk Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li class="{{ is_active('clerkhome') }}">
                <a href="{{ route('clerkhome') }}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#discrepancyactions" class="collapsed{{ is_active_array(['adddiscrepancylist','adddiscrepancycategory']) }}">
                <a href="#"><i class="fa fa-times fa-lg"></i> Discrepancies <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="discrepancyactions">
                <li class="{{ is_active('adddiscrepancylist') }}"><a href="{{ route('adddiscrepancylist') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Discrepancy</a></li>
                <li class="{{ is_active('adddiscrepancycategory') }}"><a href="{{ route('adddiscrepancycategory') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Category</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#departmentactions" class="collapsed{{ is_active_array(['addteacherdept','addclerkdept','adddeandept']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Fees <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="departmentactions">
                <li class="{{ is_active('addteacherdept') }}"><a href="{{ route('addteacherdept') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Teacher Department</a></li>
                <li class="{{ is_active('addclerkdept') }}"><a href="{{ route('addclerkdept') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Clerk Department</a></li>
                <li class="{{ is_active('adddeandept') }}"><a href="{{ route('adddeandept') }}"><span class="glyphicon glyphicon-plus-sign"></span>Add Dean Department</a></li>
            </ul>
        </ul>
    </div>
</div>