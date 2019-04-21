<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registerOnCourse extends Model
{
    protected $table = 'registeroncourse';
    public function openCourse(){
        return $this->belongsTo(openCourse::class,'course_Id');
    } 

    public function user(){
        return $this->belongsTo(users::class,'user_Id');
    }
    public function attendance(){
        return $this->hasMany(attendance::class);
    }

    public function certificate(){
        return $this->hasMany(certificate::class);
     }
      public function notForTrainer(){
        return $this->hasMany(noteForTrainer::class);
     }
     public function courseEvaluation(){
        return $this->hasMany(courseEvaluation::class);
     }

     public function studentAsssessment(){
        return $this->hasMany(studentAssessment::class);
     }

}
