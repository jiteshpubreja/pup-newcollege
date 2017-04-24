<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionReportMember extends Model
{
    
    protected $table = 'inspection_report_members';

    protected $fillable = [
    'id_inspection',
    'id_teacher',
    ];

    public function teacher(){

        return $this->belongsTo('App\Teacher','id_teacher');
    }

    public function inspection(){

      return $this->belongsTo('App\Inspection','id_inspection');
  }
}
