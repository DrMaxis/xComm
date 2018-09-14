<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
//Route::post('/test', 'Api\AccountController@test');
Route::get('/landing', 'PageController@landing')->name('landing');
Route::get('/dash', 'PageController@dashboard')->name('dashboard');
Route::get('/dash/transfer', 'PageController@changeFunds')->name('transferMoney');



 //Create a new account from incomm api
Route::post('/dash', 'Api\AccountController@createAccount')->name('createAccount');
//Get account info by id
Route::get('/account/{{id}}', 'Api\AccountController@viewAccount')->name('viewAccount');
//Delete an Account
Route::delete('/account/{{id}/delete', 'Api\AccountController@deleteAccount')->name('deleteAccount');
 //Show all Accounts
Route::get('/dash/accounts', 'Api\AccountController@showAccounts')->name('showAccounts');
//View Transactions from account(id)
Route::get('/transactions', 'Api\AccountController@viewTransactions')->name('viewTransactions');
//View Single Transaction from Account(id)
Route::get('/transactions/{{id}}', 'Api\AccountController@viewTransaction')->name('singleTransaction');
//Delete all Transactions
Route::delete('/transactions/delete', 'Api\AccountController@deleteTransaction')->name('deleteTransaction');
//Delete ONE transaction
Route::delete('/transactions/{{id}}/delete', 'Api\AccountController@deleteTransaction')->name('deleteSingleTransaction');
//Send Funds from account
Route::post('/transactions/send','Api\AccountContrller@sendFunds')->name('sendFunds');
//Update Account Balance
Route::patch('/account/{{id}}', 'Api\AccountController@updateBalance'); 


//Route::get('/home', 'HomeController@index')->name('home');
