<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentAssessment extends Model
{
    protected $table = 'studentassess';
    public function openCourse(){
        return $this->belongsTo(openCourse::class,'openCourse_Id');
    } 

    public function registerStudent(){
        return $this->belongsTo(registerOnCourse::class,'registerStudent_Id');
    }
}
