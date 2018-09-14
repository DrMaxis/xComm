<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';


    public function transaction() {
        return $this->belongsTo('App\Transaction');
    }
}
