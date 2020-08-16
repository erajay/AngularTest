<?php

namespace App;
use App\Team;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    


    public function team(){
       return $this->belongsTo('App\Team','teamId','id');
     }
}
