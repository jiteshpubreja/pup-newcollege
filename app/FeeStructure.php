<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class FeeStructure extends Model
{
    protected $table = 'account_fee_structure';

	protected $fillable = [
        'name', 'amount',
    ];


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
        ]);
    }

    protected function createfeestructure(array $data)
    {
    	$this->name = $data['name'];
    	$this->amount = $data['amount'];
    	$this->save();

        return $this;
    }

    public function addfeestructure(array $input){

		$validator = $this->validator($input);
        if ($validator->passes()){
            return $this->createfeestructure($input);
        }
        return $validator->errors();
	}
}
