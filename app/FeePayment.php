<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeePayment extends Model
{
    protected $table = 'fee_payments';

    protected $fillable = [
    'id_college',
    'president_name',
    'purpose',
    'amount',
    'draft_no',
    'bank_name',
    'dated',
    'draft_image',
    'is_verified',
    'verified_by',
    ];


    public function college(){

        return $this->belongsTo('App\College','id_college');
    }
}
