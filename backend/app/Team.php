<?php

namespace App;
use App\Player;
use App\Matches;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    

    
    
    public function players(){
      return $this->hasMany('App\Player','teamId','id');
    }

    public function points(){
      return $this->hasMany('App\Points','teamId','id');
    }
    
   

    public function matches(){
      return $this->belongsToMany('App\Team','matches','firstTeamId','secondTeamId')->withPivot('winnerTeamId');
    }

    public function matches2(){
      return $this->belongsToMany('App\Team','matches','secondTeamId','firstTeamId')->withPivot('winnerTeamId');
    }


    
}
