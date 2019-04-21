<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employerUser extends Model
{
    protected $table='employeruser';
    // public function employers(){
    //     return $this->belongsTo(employer::class,'employer_Id');
    // }

    // public function users(){
    //     return $this->belongsTo(User::class,'user_Id');
    // }
}
