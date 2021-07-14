<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public function diagnosa() {
        return $this->hasMany('App\diagnosa');
    }

    public function saran() {
        return $this->hasMany('App\Saran');
    }
}
