<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainerEvaluation extends Model
{
    protected $table='trainerevaluation';
     public function trainer(){
        return $this->belongsTo(User::class,'trainer_Id');
    }
}
