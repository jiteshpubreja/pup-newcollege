<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspection_reports';

	protected $fillable = [
        'id_college', 'id_teacher','final_remarks',
    ];

	public function discrepancies(){

		return $this->hasMany('App\Discrepancy','id_inspection');
	}
}
