<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionRequest extends Model
{
    protected $table = 'inspection_requests';

	protected $fillable = [
        'id_college',
    ];

    public function college(){

        return $this->belongsTo('App\College','id_college');
    }
}
