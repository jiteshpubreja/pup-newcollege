<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionRequest extends Model
{
	protected $table = 'inspection_requests';

	protected $fillable = [
	'id_college',
	'is_forwarded_to_dean',
	];

	public function college(){

		return $this->belongsTo('App\College','id_college');
	}
}
