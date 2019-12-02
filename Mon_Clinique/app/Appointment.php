<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function consultation(){
        return $this->hasMany('App\Consultation');   
    }
}
