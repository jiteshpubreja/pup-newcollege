<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspection_reports';

	protected $fillable = [
        'id_college',
        'id_teacher',
        'final_remarks',
        'is_seen_by_clerk',
        'is_forwarded_to_dean',
        'is_seen_by_dean',
        'is_approved_by_dean',
    ];

    public function college(){

        return $this->belongsTo('App\College','id_college');
    }

    public function inspector(){

        return $this->belongsTo('App\Teacher','id_teacher');
    }

    public function discrepancies(){

		return $this->hasMany('App\Discrepancy','id_inspection');
	}
}
