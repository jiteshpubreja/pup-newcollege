<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionMember extends Model
{
    protected $table = 'inspection_members';

	protected $fillable = [
        'id_assignment',
        'id_teacher',
    ];

    public function teacher(){

        return $this->belongsTo('App\Teacher','id_teacher');
    }

    public function assignment(){

        return $this->belongsTo('App\InspectionAssignment','id_assignment');
    }
}
