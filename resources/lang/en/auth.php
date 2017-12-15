<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'email' => 'Email address not found',
    'password' => 'Incorrect password',
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'codesent' => 'We have sent you an activation code. Please check your mail.',
    'activated' => 'User activated successfully.',
    'preactivated' => 'User is already actived.',
    'invalidtoken' => 'Your token is invalid.',
    'inactiveuser' => 'You need to confirm your account. We have sent you an activation code, please check your email.',
    'activationsubject' => 'Your activation code for '.config('app.name', '').' Registration',

];
