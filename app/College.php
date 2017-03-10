<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'college_applicants';

	protected $fillable = [
        'id_user', 'number_of_inspections',
    ];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}

	public function inspections(){

		return $this->hasMany('App\Inspection','id_college');
	}
}
