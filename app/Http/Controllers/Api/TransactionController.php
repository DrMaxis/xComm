<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    


    public function transferFunds() {


        
            /* 
            $headers = [
                    'x-api-key' => 'Y5t60NkuJ7tLWFnoxc5z',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Accept' => 'application/json'
                ];
            $apiSource = 'https://us-central1-incomm-hackathon-api.cloudfunctions.net/api/'; */
            
            $url = 'http://us-central1-incomm-hackathon-api.cloudfunctions.net/api/';
                $client = new Client;
            
                $response = $client->post($url.'accounts',
                ['headers' => [
                    'x-api-key' => 'Y5t60NkuJ7tLWFnoxc5z',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Accept' => 'application/json',
                    ], 
                
                ]);
            
                $result = json_decode($response->getBody()->getContents());
                $raw = $result;
                $status= $response->getStatusCode();
                
                if($status != 200) {
                    return view('pages.dashboard')->with('error', "error".$status);
                } else {
                $account = new Account;
                $account->account_id = $result->id;
                $account->balance = $result->balance;
                $account->user_id = auth()->user()->id;
                $account->save();
                return view('pages.dashboard')->with('account', $account);
            
                }
            
                
            } 
    
}
