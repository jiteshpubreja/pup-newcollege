<?php

namespace App;

use App\Admin;
use App\Clerk;
use App\College;
use App\Dean;
use App\Teacher;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salutation','fname', 'email', 'password', 'lname','mobile','landline','is_activated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','is_activated',
    ];


    public function isAdmin() {
        return Admin::where('id_user',$this->id)->first();
    }


    public function isClerk() {
        return Clerk::where('id_user',$this->id)->first();
    }


    public function isCollege() {
        return College::where('id_user',$this->id)->first();
    }


    public function isDean() {
        return Dean::where('id_user',$this->id)->first();
    }


    public function isTeacher() {
        return Teacher::where('id_user',$this->id)->first();
    }


    public function fullname() {
        return $this->salutation." ".$this->fname." ".$this->lname;
    }


}
