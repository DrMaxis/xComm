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

class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    
public function index() {
    
   
    
    
    return view('dash.index');
}

public function showAllServices() {

    $user_id = auth()->user()->id;
    $user = User::find($user_id);

}

public function showAllAccounts() {
 
    $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dash.showAllAccounts')->with('accounts', $user->accounts);


   /*  $user = User::find($id);
    $accounts =  Account::get();
    foreach($accounts as $account) {
        $account->user()->first;

}

// Check for correct user
 if(auth()->user()->id !== $account ) {
    //return redirect('/landing')->with('error', 'Unauthorized Page');
    return $id;
    } */


 



/* foreach($accounts as  $account) {
    $id = $account->user_id;
    $balance = $account->balance;
    $transactionsCount = $account->tranactionsCount;
    $accountName = $account->account_id;


   $data =  array('accountName' => $accountName, 'id' => $id, 'balance' => $balance, 'count' => $transactionsCount);

    
    
    


} */

//return view('dash.showAllAccounts')->with('accounts', $user->accounts);
/* $user = User::get()->where('id', '=' $accounts->user_id)

    $user_id = auth()->user()->id;
    
    
    if($user_id !=$accounts->$user_id) {
        
    }
 */
   

   
    













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
    
        //return view('api.viewAccount')->with('account', $account);
        dd($account['account_id']); */
}







}
