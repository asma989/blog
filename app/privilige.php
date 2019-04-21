<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privilige extends Model
{
    protected $table = 'privilige';
    public function roles(){
        return $this->belongsTo(role::class,'role_Id');
    }
}
