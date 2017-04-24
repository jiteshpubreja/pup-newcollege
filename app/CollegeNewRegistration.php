<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollegeNewRegistration extends Model
{

    use SoftDeletes;


    protected $table = 'college_new_registeration';

    protected $fillable = [
    'id_college',
    'ref_id',
    'college_name',
    'session',
    'courses',
    'co_education',
    'railway_station',
    'bus_stand',
    'post_office',
    'telegram',
    'college_phone_number',
    'principal_phone_number',
    'president_of_mgmt_committee',
    'secretary_office',
    'principal_residence_phone',
    'principal_office_building',
    'classes_count',
    'classes_size',
    'staff_room',
    'commonroom_for_girls',
    'commonroom_for_boys',
    'reading_room',
    'readingroom_size',
    'periodical_room',
    'periodical_room_size',
    'studyroom_for_staff',
    'studyroom_for_staff_size',
    'science_lab',
    'science_lab_size',
    'another_store_room',
    'water_supply',
    'electricity',
    'boys_washroom',
    'girls_washroom',
    'other_details',
    'residence_for_principal',
    'required_furniture',
    'land_details',
    'endorsement_fund',
    'endorsement_fund_details',
    'resources',
    'resources_detail',
    'bank_balance',
    'provision_of_25000',
    'every_year_10000',
    'any_other_amount',
    'register_committee',
    'within_5mile',
    'any_other_college_name',
    'early_members',
    'appoint_qualifiedfaculty',
    'salary_acc_ugc',
    'is_submitted',
    'is_seen_by_clerk',
    'is_forwarded_to_dean',
    'is_seen_by_dean',
    'is_loi_granted',
    'rejection_remarks',
    ];

    protected $dates = ['deleted_at'];


    public function college(){

      return $this->belongsTo('App\College','id_college');
  }
}
