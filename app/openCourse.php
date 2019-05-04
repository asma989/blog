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
    public function notForTrainer(){
      return $this->hasMany(noteForTrainer::class);
   }

   public function courseEvaluation(){
      return $this->hasMany(courseEvaluation::class);
   }

   public function studentAsssessment(){
      return $this->hasMany(studentAssessment::class);
   }

   public function checkIfExist($course)
   {
      return $this::where("course_Id","=", $course->course_Id)
                  ->where("teacher_Id","=", $course->teacher_Id)
                  ->where("startDate","=",  $course->startDate)
                  ->where("endDate","=",  $course->endDate)
                  ->first();
   }
}
