<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    public function staff(){
        return $this->belongsTo('App\Staff');   
    }

    public function patient(){
        return $this->belongsTo('App\Patient');   
    }

    public function appointment(){
        return $this->belongsTo('App\Appointment');   
    }

    public function payment(){
        return $this->hasMany('App\Payment');   
    }
}
