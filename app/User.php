<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     // in the table that does not contain the fk we use hasOne/Many("model","fk");
        protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name', 'Email', 'Password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personalInfo(){
        return $this->hasOne('App\personalInfos',"userId");
    }

    public function roles(){
        return $this->belongsToMany(role::class);
    }

    public function registerOnCourse(){
        return $this->hasMany(registerOnCourse::class);
    }
}
