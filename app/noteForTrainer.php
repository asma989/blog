<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noteForTrainer extends Model
{
    protected $table = 'notefortrainer';
    public function openCourse(){
        return $this->belongsTo(openCourse::class);
    }
    public function student(){
        return $this->belongsTo(registerOnCourse::class);
    }
}
