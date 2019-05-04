<?php

namespace App;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
     // in the table that does not contain the fk we use hasOne/Many("model","fk");
        protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
{
    return $this->password;
}
    public function personalInfo(){
        return $this->hasOne('App\personalInfos',"userId");
    }

    // public function roles(){
    //     return $this->belongsToMany(role::class);
    // }

    public function registerOnCourse(){
        return $this->hasMany(registerOnCourse::class);
    }

    public function courseEvaluation(){
        return $this->hasMany(courseEvaluation::class);
     }

     public function employers(){
        return $this->hasMany(employer::class);
    }

    public function trainerEvaluation(){
        return $this->hasMany(trainerEvaluation::class);
    }
}
