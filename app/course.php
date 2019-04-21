<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    public function opencourse(){
        return $this->hasMany(openCourse::class);
    }
    public function acceptanceQuestions(){
        return $this->hasMany(acceptance_test_Questions::class);
    }
    
}
