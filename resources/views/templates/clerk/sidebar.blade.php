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
                <li class="{{ is_active('adddiscrepancycategory') }}"><a href="{{ route('adddiscrepancycategory') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Category</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#departmentactions" class="collapsed{{ is_active_array(['addfeestructure','clerkviewalldrafts']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Fees   {!! new_drafts() !!}<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="departmentactions">
                <li class="{{ is_active('addfeestructure') }}"><a href="{{ route('addfeestructure') }}"><span class="glyphicon glyphicon-plus-sign"></span> Add Fee Structure</a></li>
                <li class="{{ is_active('clerkviewalldrafts') }}"><a href="{{ route('clerkviewalldrafts') }}"><span class="glyphicon glyphicon-folder-open"></span> View Drafts   {!! new_drafts() !!}</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#applicationactions" class="collapsed{{ is_active_array(['clerkviewapplication','clerkviewapplicationrejects']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Applications   {!! new_applications() !!} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="applicationactions">
                <li class="{{ is_active('clerkviewapplication') }}"><a href="{{ route('clerkviewapplication') }}"><span class="glyphicon glyphicon-folder-open"></span> View Applications   {!! new_applications() !!}</a></li>
                <li class="{{ is_active('clerkviewapplicationrejects') }}"><a href="{{ route('clerkviewapplicationrejects') }}"><span class="glyphicon glyphicon-folder-open"></span> Rejected Applications</a></li>
            </ul>

            <li data-toggle="collapse" data-target="#inspectionactions" class="collapsed{{ is_active_array(['clerkviewinspection','clerkviewrequest']) }}">
                <a href="#"><i class="fa fa-ticket fa-lg"></i> Inspections   {!! new_inspections_tab() !!} <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="inspectionactions">
                <li class="{{ is_active('clerkviewrequest') }}"><a href="{{ route('clerkviewrequest') }}"><span class="glyphicon glyphicon-folder-open"></span> View Requests   {!! new_requests() !!}</a></li>
                <li class="{{ is_active('clerkviewinspection') }}"><a href="{{ route('clerkviewinspection') }}"><span class="glyphicon glyphicon-folder-open"></span> View Inspections   {!! new_inspections() !!}</a></li>
            </ul>
            <li class="{{ is_active('clerkbacknotes') }}">
                <a href="{{ route('clerkbacknotes') }}">
                    <i class="fa fa-pencil-square-o fa-lg"></i> View Backnotes
                </a>
            </li>
        </ul>
    </div>
</div>