<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clerk extends Model
{

	
	
	protected $table = 'clerks';

	protected $fillable = [
	'id_user', 'designation', 'id_dept',
	];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}

	public function department(){

		return $this->belongsTo('App\DepartmentClerk','id_dept');
	}


}
