<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class DiscrepancyList extends Model
{
    protected $table = 'discrepancy_list';

    protected $fillable = [
    'name', 'id_discrepancy_category',
    ];

    public function category(){

      return $this->belongsTo('App\DiscrepancyCategory','id_discrepancy_category');
  }


  protected function validator(array $data)
  {
    return Validator::make($data, [
        'name' => 'required|max:255',
        'id_category' => 'required',
        ]);
}

protected function creatediscrepancy(array $data)
{
   $this->name = $data['name'];
   $this->id_discrepancy_category = $data['id_category'];
   $this->save();

   return $this;
}

public function adddiscrepancy(array $input){

  $validator = $this->validator($input);
  if ($validator->passes()){
    return $this->creatediscrepancy($input);
}
return $validator->errors();
}





}
