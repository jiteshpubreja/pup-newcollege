<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscrepancyList extends Model
{
    protected $table = 'discrepancy_list';

	protected $fillable = [
        'name', 'description',
    ];



	

}
