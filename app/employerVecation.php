<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employerVecation extends Model
{
    protected $table = 'employeruser';
    public function employer(){
        return $this->belongsTo(employer::class,'employer_Id');
    }

    public function employerUser(){
        return $this->belongsTo(employer_user::class,'empolyerUser_Id');
    }
}
