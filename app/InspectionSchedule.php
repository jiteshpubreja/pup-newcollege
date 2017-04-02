<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionSchedule extends Model
{
    protected $table = 'inspection_schedule';

	protected $fillable = [
        'id_assignment',
        'date',
    ];

    protected $dates = ['date'];

    public function assignment(){

        return $this->belongsTo('App\InspectionAssignment','id_assignment');
    }
}
