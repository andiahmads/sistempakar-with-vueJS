<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    public function rule()
    {
        return $this->belongsTo('App\Rule');
    }

    public function diagnosa()
    {
        return $this->hasMany('App\Diagnosa');
    }

}
