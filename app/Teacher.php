<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

	protected $table = 'teachers';

	protected $fillable = [
	'id_user', 'designation', 'specialization', 'id_dept',
	];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}

	public function department(){

		return $this->belongsTo('App\DepartmentTeacher','id_dept');
	}
}
