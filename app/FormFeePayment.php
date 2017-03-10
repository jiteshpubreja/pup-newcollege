<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFeePayment extends Model
{
    protected $table = 'forms_fee_payments';

	protected $fillable = [
        'id_college', 'id_form_fee_requirement', 'id_fee_payment',
    ];
}
