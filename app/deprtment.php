<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deprtment extends Model
{
    protected $table = 'department';
    public function employers(){
        return $this->hasMany(employer::class);
    }
}
