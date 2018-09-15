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

                       {{--   <form method="DELETE" action="{{url('account/'.$account->id . '/delete')}}">
        

                                @csrf
                
                                <button type="submit" class="btn btn-primary">
                <p><b>Delete Account</b></p>
                </button>
                </form>  --}}


            </div>
            

                </div>
            </div>
        </div>
    </div>