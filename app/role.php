<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = "role";
    public function users(){
      return $this->belongsToMany(User::class);
    }

    public function priviliges(){
        return $this->hasMany(privilige::class,'role_id');
    }
}
