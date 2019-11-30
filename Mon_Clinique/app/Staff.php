<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function clinical(){
        return $this->belongsTo('App\Clinical');
    }
}
