<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Specialization extends Model
{
    protected $table = 'list_of_specialization';

    protected $fillable = [
    'name',
    ];


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|unique:list_of_specialization',
            ]);
    }

    protected function createdepartment(array $data)
    {
    	$this->name = $data['name'];
    	$this->save();

        return $this;
    }

    public function adddepartment(array $input){

      $validator = $this->validator($input);
      if ($validator->passes()){
        return $this->createdepartment($input);
    }
    return $validator->errors();
}
}
