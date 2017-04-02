<?php


function is_active($view) {
    return route($view) == route('home').'/'.Route::getCurrentRoute()->uri ? ' active' : '';
}

function is_active_array($views) {
    $return = false;
    foreach ($views as $view) {
        $return = route($view) == route('home').'/'.Route::getCurrentRoute()->uri ? true : false;
        if($return) {
            return ' active';
        }
    }
    return '';
}

function dated_format($date) {
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->toFormattedDateString();
}

function new_inspections_tab() {

    $count = \App\Inspection::where('is_seen_by_clerk',false)->get()->count();
    $count += \App\InspectionRequest::where('is_forwarded_to_dean',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_inspections_tab_dean() {

    $count = \App\Inspection::where('is_forwarded_to_dean',true)->where('is_seen_by_dean',false)->get()->count();
    $count += \App\InspectionRequest::where('is_forwarded_to_dean',true)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_inspections() {

    $count = \App\Inspection::where('is_seen_by_clerk',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_inspections_dean() {

    $count = \App\Inspection::where('is_forwarded_to_dean',true)->where('is_seen_by_dean',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_requests() {

    $count = \App\InspectionRequest::where('is_forwarded_to_dean',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_requests_dean() {

    $count = \App\InspectionRequest::where('is_forwarded_to_dean',true)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_applications() {

    $count = \App\CollegeNewRegistration::where('is_seen_by_clerk',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_applications_dean() {

    $count = \App\CollegeNewRegistration::where('is_forwarded_to_dean',true)->where('is_seen_by_dean',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_drafts() {

    $count = \App\FeePayment::where('is_verified',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}