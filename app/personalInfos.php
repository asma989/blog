<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalInfos extends Model
{
    // in the table that contain the fk we use belongsTo("model","fk");
   protected $table = "personal_Infos";
   public function user(){
        return  $this->belongsTo('App\User',"userId");
    }
  
}
