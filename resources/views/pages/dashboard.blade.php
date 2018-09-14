@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div>
                            <form method="POST" action="{{ route('createAccount') }}">

@csrf

<button type="submit" class="btn btn-primary">
        Create an xComm Account Here!
    </button>
                            </form>
                    </div>


                    @foreach($account as $data)
                    <div>

                    <a href="{{URL::route('viewAccount', ['id' => $data->account_id])}}">Account info</a>

                </div>

                {{$data}}

                @endforeach
            </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--  
<script type="text/javascript">
var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://us-central1-incomm-hackathon-api.cloudfunctions.net/api/accounts",
  "method": "POST",
  "headers": {
    "Accept": "application/json",
    "Content-Type": "application/x-www-form-urlencoded",
    "x-api-key": "Y5t60NkuJ7tLWFnoxc5z",
    "Cache-Control": "no-cache",
    "Postman-Token": "0d4286c7-3d9a-40b7-bfb2-a098dca2c229"
  },
  "data": ""
}

$.ajax(settings).done(function (response) {
  console.log(response);
});

    </script>  --}}
@endsection
