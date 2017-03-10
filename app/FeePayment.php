<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeePayment extends Model
{
    protected $table = 'fee_payments';

	protected $fillable = [
        'id_college', 'id_fee_structure', 'draftdetails', 'is_verified', 'verified_by',
    ];
}
