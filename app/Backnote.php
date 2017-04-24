<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backnote extends Model
{
    protected $table = 'office_backnoting';

    protected $fillable = [
    'id_college',
    'ref_id',
    'purpose',
    'id_inspection',
    'remarks',
    'id_user',
    'user_type',
    ];

    public function college(){

        return $this->belongsTo('App\College','id_college');
    }

    public function user(){

        return $this->belongsTo('App\User','id_user');
    }
}
