<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
   protected $table = 'employer';
   public function department(){
       return $this->belongsTo(department::class,'department_Id');
   }

   public function employerVecation(){
       return $this->hasMany(employer_vecation::class);
   }

   public function employerAttendance(){
    return $this->hasMany(employerAttendance::class);
   }

   public function users(){
    return $this->belongsToMany(User::class);
}
}
