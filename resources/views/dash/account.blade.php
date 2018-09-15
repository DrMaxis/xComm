@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <a href="/dash/accounts" class="btn btn-default">Go Back</a>
                        <h1>{{$account->account_id}}</h1>
                       
                        <br><br>
                        <div>
                            <p><b>Account Balance: {{$account->balance}}</b></p>
                        </div>
                        <hr>
                        <small>Written on {{$account->created_at}} by {{$account->user->name}}</small>
                        <hr>

                        {!!Form::open(['action' => ['Api\AccountController@deleteAccount', $account->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}


<div class="container">
                        {!!Form::open(['action' => ['Api\AccountController@addFunds', $account->account_id], 'enctype' => 'multipart/form-data',  'method' => 'POST', 'class' => 'pull-right'])!!}
                        <div class="form-group">
                                <label for="cashapp" class="iconLabel">Cash App</label>
                                <input id="cashapp" type="radio" value="cashapp" name="service"  autofocus="">


                        </div>
                        <div class="form-group">
                                <label for="venmo" class="iconLabel">Venmo</label>
                                <input id="venmo" type="radio" value="venmo" name="service"  autofocus="">


                        </div>
                        <div class="form-group">
                                <label for="paypal" class="iconLabel">Paypal</label>
                                <input id="paypal" type="radio" value="paypal" name="service"  autofocus="">


                        </div>

                        <div class="form-group">
                                <label for="amount" class="iconLabel">Add Funds</label>
                                <input id="amount" type="number" name="balance"  autofocus="">


                        </div>

                        <div class="form-group">
                                <input id="account_id" type="hidden" value="{{$account->account_id}}" name="account_id"  autofocus="">


                        </div>

                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!!Form::close()!!}
                    </div>

                     <div class="container">

                            <h1>{{$account->name}}</h1>
                       
                            <br><br>
                            <div>
                                <p><b> Balance: {{$account->balance}}</b></p>
                            </div>
                            <hr>
                        

                    </div>  
                          <form method="DELETE" action="{{url('account/'.$account->id . '/delete')}}">
        

                                @csrf
                
                                <button type="submit" class="btn btn-primary">
                <p><b>Delete Account</b></p>
                </button>
                </form>  


            </div>
            

                </div>
            </div>
        </div>
    </div>