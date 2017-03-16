<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormList extends Model
{
    protected $table = 'forms_list';

	protected $fillable = [
        'name', 'route',
    ];
}
