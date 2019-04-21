<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = "attendance";
    public function student(){
        return $this->belongsTo(registerOnCourse::class,'student_Id');
    }
}
