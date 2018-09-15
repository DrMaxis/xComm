<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = ['amount','service', 'description', 'status', 'transaction_id',  'type',  ];

   

    public function accounts() {
        return $this->belongsTo('App\Account');
    }
}
