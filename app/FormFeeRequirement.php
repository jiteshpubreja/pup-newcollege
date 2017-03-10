<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormFeeRequirement extends Model
{
   	protected $table = 'forms_fee_requirements';

	protected $fillable = [
        'id_form_list', 'id_fee_structure',
    ];
}
