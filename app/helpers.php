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