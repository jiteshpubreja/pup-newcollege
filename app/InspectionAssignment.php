<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionAssignment extends Model
{
    protected $table = 'inspection_assignments';

	protected $fillable = [
        'id_college',
        'id_teacher',
    ];

    public function college(){

        return $this->belongsTo('App\College','id_college');
    }

    public function teacher(){

        return $this->belongsTo('App\Teacher','id_teacher');
    }

    public function members(){

        return $this->hasMany('App\InspectionMember','id_assignment');
    }

    public function schedule(){

        return $this->hasOne('App\InspectionSchedule','id_assignment');
    }
}
