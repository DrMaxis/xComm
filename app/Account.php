<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = ['id', 'balance'];


    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function transactions() {
        return $this->hasMany('App\Transactions');
    }

}
