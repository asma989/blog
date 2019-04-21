<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseEvaluation extends Model
{
    protected $table = 'course_evaluation';
    public function trainer(){
        return $this->belongsTo(User::class,'trainer_Id');
    }

    public function openCourse(){
        return $this->belongsTo(openCourse::class,'course_Id');
    }
    
    public function student(){
        return $this->belongsTo(registerOnCourse::class,'student_Id');
    }
}
