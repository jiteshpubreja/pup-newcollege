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

function new_inspections() {

    $count = DB::table('inspection_reports')->where('is_seen_by_clerk',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}

function new_applications() {

    $count = DB::table('college_new_registeration')->where('is_seen_by_clerk',false)->get()->count();
    if($count)
        return '<span class="label label-primary">'.$count.'</span>';
    else
    return '';
}