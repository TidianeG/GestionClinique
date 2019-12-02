<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function consultation(){
        return $this->hasMany('App\Consultation');   
    }

    public function folder(){
        return $this->hasMany('App\Folder');   
    }

    public function analysis(){
        return $this->hasMany('App\Analysis');   
    }
}
