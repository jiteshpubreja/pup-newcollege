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
}
