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

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['landing']]);
    }


  

public function landing() {

    return view('pages.landing');

}





}
