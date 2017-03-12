<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscrepancyList extends Model
{
    protected $table = 'discrepancy_list';

	protected $fillable = [
        'name', 'id_discrepancy_category',
    ];

    public function category(){

		return $this->belongsTo('App\DiscrepancyCategory','id_discrepancy_category');
	}



	

}
