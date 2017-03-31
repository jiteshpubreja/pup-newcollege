<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'college_applicants';

	protected $fillable = [
        'id_user',
    ];



	public function user(){

		return $this->belongsTo('App\User','id_user');
	}



	public function form(){

		return $this->hasOne('App\CollegeNewRegistration','id_college')->orderBy('created_at','desc');
	}

	public function files(){

		return $this->hasMany('App\CollegeUploadedFile','id_college');
	}

	public function inspections(){

		return $this->hasMany('App\Inspection','id_college')->orderBy('created_at','desc');
	}
}
