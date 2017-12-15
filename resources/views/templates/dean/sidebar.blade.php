<div class="nav-side-menu">
    <div class="brand">Dean Panel</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li class="{{ is_active('deanhome') }}">
                <a href="{{route('deanhome')}}">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li data-toggle="collapse" data-target="#applicationactions" class="collapsed{{ is_active_array(['deanviewapplication','deanviewapplicationrejects']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Applications   {!! new_applications_tab_dean() !!} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="applicationactions">
                <li class="{{ is_active('deanviewapplication') }}"><a href="{{ route('deanviewapplication') }}"><span class="glyphicon glyphicon-folder-open"></span> View Applications   {!! new_applications_dean() !!}</a></li>
                <li class="{{ is_active('deanviewapplicationrejects') }}"><a href="{{ route('deanviewapplicationrejects') }}"><span class="glyphicon glyphicon-folder-open"></span> Rejected Applications   {!! rejected_applications_dean() !!}</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#departmentactions" class="collapsed{{ is_active_array(['deanviewdrafts']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Fees<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="departmentactions">
                <li class="{{ is_active('deanviewdrafts') }}"><a href="{{ route('deanviewdrafts') }}"><span class="glyphicon glyphicon-folder-open"></span> View Drafts</a></li>
            </ul>


            <li data-toggle="collapse" data-target="#inspectionactions" class="collapsed{{ is_active_array(['deanviewinspection','deanviewrequest']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Inspections   {!! new_inspections_tab_dean() !!} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="inspectionactions">
                <li class="{{ is_active('deanviewrequest') }}"><a href="{{ route('deanviewrequest') }}"><span class="glyphicon glyphicon-folder-open"></span> View Requests   {!! new_requests_dean() !!}</a></li>
                <li class="{{ is_active('deanviewinspection') }}"><a href="{{ route('deanviewinspection') }}"><span class="glyphicon glyphicon-folder-open"></span> View Inspections   {!! new_inspections_dean() !!}</a></li>
            </ul>
            <li class="{{ is_active('deanbacknotes') }}">
                <a href="{{ route('deanbacknotes') }}">
                    <i class="fa fa-pencil-square-o fa-lg"></i> View Backnotes
                </a>
            </li>
        </ul>
    </div>
</div>