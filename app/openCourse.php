<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class openCourse extends Model
{
   protected $table = "opencourse";
   public function course(){
        return $this->belongsTo(course::class,'course_Id');
   }
   public function trainer(){
    return $this->belongsTo(User::class,'teacher_Id');
   }
    public function certificate(){
       return $this->hasMany(certificate::class);
    }
}
