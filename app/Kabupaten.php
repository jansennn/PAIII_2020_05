<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    public function cbt(){
    	return $this->hasMany('App\Cbt');
    }

    public function objekWisata(){
    	return $this->hasMany('App\ObjekWisata');
    }
}
