<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    protected $table = 'account_fee_structure';

	protected $fillable = [
        'name', 'timespan', 'description',
    ];
}
