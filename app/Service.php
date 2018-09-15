<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['balance', 'name', 'account_id'];

    public function transaction() {
        return $this->belongsTo('App\Transaction');
    }

    public function account() {
        return $this->belongsTo('App\Account','name', 'balance','id', 'account_id');
    }

}
