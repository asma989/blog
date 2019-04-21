<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employerAttendance extends Model
{
    protected $table='employerattendance';
    public function employer(){
        return $this->belongsTo(employer::class,'employer_Id');
    }
}
