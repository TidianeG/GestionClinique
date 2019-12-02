<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function consultation(){
        return $this->belongsTo('App\Consultation');   
    }
}
