@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if(count($accounts) > 0)
                   @foreach($accounts as $account)

                </div>

<a href="{{url('account/'.$account->id)}}"><p><b>{{$account->account_id}}</b></p>
<p><b>{{$account->balance}}</b></p>
<p><b>{{$account->transactionCount}}</b></p>

            </div>
            @endforeach
            @endif

                </div>
                <div>

                        @include('inc.messages')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
