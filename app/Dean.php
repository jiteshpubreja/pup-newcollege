<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{
    protected $table = 'deans';

	protected $fillable = [
        'id_user', 'designation', 'id_dept',
    ];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}

	public function department(){

		return $this->belongsTo('App\DepartmentDean','id_dept');
	}
}
