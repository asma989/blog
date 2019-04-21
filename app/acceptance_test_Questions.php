<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acceptance_test_Questions extends Model
{
    protected $table = 'acceptancetestquestions';

    public function course(){
        return $this->belongsTo(course::class,'course_Id');
    }
}
