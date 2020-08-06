<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    public function survey()
    {
        return $this->belongsTo('App\Models\Survey');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
