<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormList extends Model
{
    protected $table = 'forms_list';

	protected $fillable = [
        'id_form_list', 'id_fee_structure',
    ];
}
