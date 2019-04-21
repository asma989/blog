<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    protected $table = 'certificate';
    public function registerStudent(){
        return $this->belongsTo(registerOnCourse::class,'register_Id');
    }

    public function openCourse(){
        return $this->belongsTo(openCourse::class,'openCourse_Id');
    }
}
