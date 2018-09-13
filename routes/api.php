<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Create a new account from incomm api
Route::post('/dash', 'AccountController@createAccount')->name('createAccount');
//Get account info by id
Route::get('/account/{{id}}', 'AccountController@viewAccount')->name('viewAccount');
//Delete an Account
Route::delete('/account/{{id}/delete', 'AccountController@deleteAccount')->name('deleteAccount');
//Show all Accounts
Route::get('/dash/accounts', 'AccountController@showAccounts')->name('showAccounts');
//View Transactions from account(id)
Route::get('/transactions', 'AccountController@viewTransactions')->name('viewTransactions');
//View Single Transaction from Account(id)
Route::get('/transactions/{{id}}', 'AccountController@viewTransaction')->name('singleTransaction');
//Delete all Transactions
Route::delete('/transactions/delete', 'AccountController@deleteTransaction')->name('deleteTransaction');
//Delete ONE transaction
Route::delete('/transactions/{{id}}/delete', 'AccountController@deleteTransaction')->name('deleteSingleTransaction');
//Send Funds from account
Route::post('/transactions/send','AccountContrller@sendFunds')->name('sendFunds');
//Update Account Balance
Route::update('/account/{{id}}', 'AccountController@updateBalance');

