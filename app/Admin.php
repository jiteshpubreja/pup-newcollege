<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

	protected $table = 'admins';

	protected $fillable = [
        'id_user',
    ];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}



}
