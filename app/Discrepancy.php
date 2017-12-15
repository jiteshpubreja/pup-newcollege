<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discrepancy extends Model
{
	protected $table = 'discrepancy_applications';

	protected $fillable = [
	'id_discrepancy_list', 'id_college','is_discrepancy', 'remarks', 'id_inspection',
	];

	public function listname(){

		return $this->belongsTo('App\DiscrepancyList','id_discrepancy_list');
	}

	public function inspection(){

		return $this->belongsTo('App\Inspection','id_inspection');
	}
}
