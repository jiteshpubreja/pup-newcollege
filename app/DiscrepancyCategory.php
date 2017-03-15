<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class DiscrepancyCategory extends Model
{
   	protected $table = 'discrepancy_category_list';

	protected $fillable = [
        'name',
    ];

	public function discrepancies(){

		return $this->hasMany('App\DiscrepancyList','id_discrepancy_category');
	}


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
        ]);
    }

    protected function createcategory(array $data)
    {
    	$this->name = $data['name'];
    	$this->save();

        return $this;
    }

    public function addcategory(array $input){

		$validator = $this->validator($input);
        if ($validator->passes()){
            return $this->createcategory($input);
        }
        return $validator->errors();
	}


}
