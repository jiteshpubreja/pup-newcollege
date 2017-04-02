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
            <li data-toggle="collapse" data-target="#application" class="collapsed{{ is_active_array(['collegenewapply','collegeuploaddocs','collegeviewrejected']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Application <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="application">
                <li class="{{ is_active('collegenewapply') }}"><a href="{{ route('collegenewapply') }}"><span class="glyphicon glyphicon-plus-sign"></span> Apply For New College</a></li>
                <li class="{{ is_active('collegeuploaddocs') }}"><a href="{{ route('collegeuploaddocs') }}"><span class="glyphicon glyphicon-plus-sign"></span> Upload Documents</a></li>
                <li class="{{ is_active('collegeviewrejected') }}"><a href="{{ route('collegeviewrejected') }}"><span class="glyphicon glyphicon-plus-sign"></span> View Rejected</a></li>
            </ul>
            <li data-toggle="collapse" data-target="#fees" class="collapsed{{ is_active_array(['collegeuploaddraft']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Fees <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="fees">
                <li class="{{ is_active('collegeuploaddraft') }}"><a href="{{ route('collegeuploaddraft') }}"><span class="glyphicon glyphicon-plus-sign"></span> Upload Drafts</a></li>
            </ul>
            <li data-toggle="collapse" data-target="#inspection" class="collapsed{{ is_active_array(['collegerequestinspection']) }}">
                <a href="#"><i class="fa fa-users fa-lg"></i> Inspections <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="inspection">
                <li class="{{ is_active('collegerequestinspection') }}"><a href="{{ route('collegerequestinspection') }}"><span class="glyphicon glyphicon-plus-sign"></span> Request Inspection</a></li>
            </ul>
            <li class="{{ is_active('collegedownloads') }}">
                <a href="{{route('collegedownloads')}}">
                    <i class="fa fa-download fa-lg"></i> Downloads
                </a>
            </li>
        </ul>
    </div>
</div>