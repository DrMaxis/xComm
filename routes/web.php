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






/**
 * 
 *  PAGES(static)
 * 
 * 
 */
Route::get('/landing', 'PageController@landing')->name('landing'); //---------- // done





// USER MUST BE LOGGED IN TO VIEW DATA
Auth::routes();


/**
 * 
 *  DASHBOARD(dynamic)
 * Shows Accounts and Transactions
 * Creates Accounts and Transactions
 * 
 *
 * 
 * 
 */

 //Show Dashboard
Route::get('/dash', 'Api\DashboardController@index')->name('dashboard'); //  //---------- // done

 //Create a new account from incomm api via form POST method
Route::post('/dash', 'Api\AccountController@createAccount')->name('createAccount'); //    //---------- // done

//Show all Accounts
Route::get('/dash/accounts/', 'Api\DashboardController@showAllAccounts')->name('showAccounts'); //    //---------- // done

//Send money or funds(Create a transaction)
Route::get('/dash/transfer', 'Api\TransactionController@changeFunds')->name('transferMoney');





/**
 * 
 *  ACCOUNT ROUTES
 *  Show account
 * Delete Account
 * Update Account Balance
 * 
 * 
 */

//Get account info by id
Route::get('/account/{id}', 'Api\AccountController@viewAccount')->name('viewAccount'); //    //---------- // done
//Delete an Account
Route::delete('/account/{id}/delete', 'Api\AccountController@deleteAccount')->name('deleteAccount');

//Update Account Balance
Route::patch('/account/{id}', 'Api\AccountController@updateBalance')->name('updateAccount'); 

//Send Funds from account
Route::post('/send','Api\AccountContrller@sendFunds')->name('sendFunds');



/**
 * 
 * 
 * TRANSACTION ROUTES
 * Create Transaction
 * Show all transactions 
 * Show single Transaction
 * Delete all transactions
 * Delete Single Transaction
 * 
 * 
 * 
 */


//View Transactions from account(id)
Route::get('/transactions', 'Api\TransactionController@viewTransactions')->name('viewTransactions');
//View Single Transaction from Account(id)
Route::get('/transactions/{{id}}', 'Api\TransactionController@viewTransaction')->name('singleTransaction');
//Delete all Transactions
Route::delete('/transactions/delete', 'Api\TransactionController@deleteTransaction')->name('deleteTransaction');
//Delete ONE transaction
Route::delete('/transactions/{{id}}/delete', 'Api\TransactionController@deleteTransaction')->name('deleteSingleTransaction');




















/**
 * 
 *  Shit i dont need or for testing
 * 
 * 
 * 
 */
//Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/test', 'Api\AccountController@test');