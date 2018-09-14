<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use App\Account;
use App\Transaction;
use App\Service;



class AccountController extends Controller
{

     

 
public function createAccount() {
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





public function viewAccount($id) {

$account = Account::find($id);

//$accountID = Account::where('account_id', '=', $id);

/* $accountID = Account::find('account_id');
$aid = $accountID;

    $headers = [
        'x-api-key' => 'Y5t60NkuJ7tLWFnoxc5z',
        'Accept' => 'application/json'
    ];

$apiSource = 'https://us-central1-incomm-hackathon-api.cloudfunctions.net/api/';


    $client = new Client([
        'base_uri' => $apiSource,
        'headers' => $headers
    ]);

    $response = $client->request('GET','accounts/')->send();
    $data = $response-getBody()->getContents();
    $account = json_decode($data, true);
 */
    //return view('api.viewAccount')->with('account', $account);
    return $account;
    




}

public function deleteAccount($id) {
    $account = User::find(id)->accounts;
    $accountID = Account::find('account_id');
    $aid = $accountID;



    $headers = [
        'x-api-key' => 'Y5t60NkuJ7tLWFnoxc5z',
        'Accept' => 'application/json'
    ];

$apiSource = 'https://us-central1-incomm-hackathon-api.cloudfunctions.net/api/';


    $client = new Client([
        'base_uri' => $apiSource,
        'headers' => $headers
    ]);

    $response = $client->request('DELETE','accounts/'. $aid)->send();
    Account::where('id', $id)->delete();
    $status = $client->getStatusCode();
    $reason = $client->getReasonPhrase();
    if($status != 200) {
        return response()->json(['error' => $reason], $status );
    } else {
        return view('pages.dashboard')->with(json(['message' => "Successfully Deleted the account"], 200));
    }
    


}

public function showAccounts() {

    $accounts = User::find(id)->accounts;


    return view('pages.accounts')->with('accounts', $accounts);

}


}
