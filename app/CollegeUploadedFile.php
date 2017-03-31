<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollegeUploadedFile extends Model
{
	protected $table = 'college_uploaded_files';

	protected $fillable = [
	'id_college',
	'ref_id',
	'filetype',
	'path',
	];



	public function college(){

		return $this->belongsTo('App\College','id_college');
	}
}
