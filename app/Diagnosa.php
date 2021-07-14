<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    protected $fillable = [
        'id', 'user_id', 'rule_id', 'gejala_1', 'gejala_2', 'gejala_3', 'gejala_4',
        'gejala_5', 'gejala_6', 'gejala_7', 'gejala_8', 'gejala_9', 'gejala_10', 'gejala_14'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function rule()
    {
        return $this->belongsTo('App\Rule');
    }

    public function saran()
    {
        return $this->belongsTo('App\Saran');
    }
}
