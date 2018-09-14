<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';


    public function services() {
        return $this->hasMany('App\Service');

    }

    public function accounts() {
        return $this->belongsTo('App\Account');
    }
}
