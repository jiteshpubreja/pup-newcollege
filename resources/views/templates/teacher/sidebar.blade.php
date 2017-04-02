<div class="nav-side-menu">
    <div class="brand">Teacher Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li class="{{ is_active('teacherhome') }}">
                <a href="{{route('teacherhome')}}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#inspections" class="collapsed{{ is_active_array(['teacherscheduleinspection','teacheraddinspection','teacherviewinspection']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Inspections <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="inspections">
                <li class="{{ is_active('teacherscheduleinspection') }}"><a href="{{ route('teacherscheduleinspection') }}"><span class="glyphicon glyphicon-plus-sign"></span> Schedule Inspection</a></li>
                <li class="{{ is_active('teacheraddinspection') }}"><a href="{{ route('teacheraddinspection') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Inspection</a></li>
                <li class="{{ is_active('teacherviewinspection') }}"><a href="{{ route('teacherviewinspection') }}"><span class="glyphicon glyphicon-folder-open"></span> View Inspections</a></li>
            </ul>
        </ul>
    </div>
</div>