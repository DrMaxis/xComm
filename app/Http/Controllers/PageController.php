<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use App\Account;
use App\Transaction;
use App\Service;

class PageController extends Controller
{
    /* Route::get('/landing', 'PageController@landing')->name('landing');
Route::get('/dash', 'PageController@dashboard')->name('dashboard');
Route::get('/dash/transfer', 'PageController@changeFunds')->name('transferMoney'); */


public function landing() {

    return view('pages.landing');

}


public function dashboard() {
    $account = Account::all();
    return view('pages.dashboard')->with('account', $account);
}

public function changeFunds() {
    return view('pages.transfer');

}

}
