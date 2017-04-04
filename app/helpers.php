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

function punjabi_alternate($string) {

    $len = mb_strlen($string);
    $sploded = array(); 
    while($len-- > 0) {
        $sploded[$len] = mb_substr($string, $len, 1); 
    }
    ksort($sploded);
    $len = mb_strlen($string);
    for ($i=0; $i < $len; $i++) { 
        if( strcmp($sploded[$i], html_entity_decode("&#x0A3C;")) == 0){
            if(strcmp($sploded[$i-1], html_entity_decode("&#x0A40;")) == 0)
                $offset=2;
            else
                $offset=1;
            switch ($sploded[$i-$offset]) {
                case html_entity_decode("&#x0A38;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A36;");
                $sploded[$i] = "";
                break;
                case html_entity_decode("&#x0A1C;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A5B;");
                $sploded[$i] = "";
                break;
                case html_entity_decode("&#x0A2B;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A5E;");
                $sploded[$i] = "";
                break;
                case html_entity_decode("&#x0A32;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A33;");
                $sploded[$i] = "";
                break;
                case html_entity_decode("&#x0A16;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A59;");
                $sploded[$i] = "";
                break;
                case html_entity_decode("&#x0A17;"):
                $sploded[$i-$offset] = html_entity_decode("&#x0A5A;");
                $sploded[$i] = "";
                break;
                default:
                break;
            }
        }



        if( strcmp($sploded[$i], html_entity_decode("&#x0A3F;")) == 0){
            $temp = $sploded[$i];
            if($sploded[$i-1] !== ''){
                $sploded[$i] = $sploded[$i-1];
                $sploded[$i-1] = $temp;
            }
            else{
                $sploded[$i] = $sploded[$i-2];
                $sploded[$i-2] = $temp;
            }
        }
    } 
    return join('', $sploded);
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