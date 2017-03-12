<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscrepancyCategory extends Model
{
   	protected $table = 'discrepancy_category_list';

	protected $fillable = [
        'name',
    ];

	public function discrepancies(){

		return $this->hasMany('App\DiscrepancyList','id_discrepancy_category');
	}
}
