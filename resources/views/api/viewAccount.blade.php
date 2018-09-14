@extends('layouts.app')

@section('content')




@foreach($account as $information)
<div>

<p>{{$information->account_id}}</p>
<p>{{$information->balance}}</p>

</div>
@endforeach
@endsection