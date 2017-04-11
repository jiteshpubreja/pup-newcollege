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



	public function draft(){

		return $this->hasOne('App\FeePayment','id_college')->where('purpose',$this->form->ref_id);
	}


	public function inspectionrequest(){

		return $this->hasOne('App\InspectionRequest','id_college');
	}


	public function inspectionassignment(){

		return $this->hasOne('App\InspectionAssignment','id_college');
	}

	public function files(){

		return $this->hasMany('App\CollegeUploadedFile','id_college');
	}

	public function backnotes(){

		return $this->hasMany('App\Backnote','id_college');
	}

	public function inspections(){

		return $this->hasMany('App\Inspection','id_college')->orderBy('created_at','desc');
	}
}
