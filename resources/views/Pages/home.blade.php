@extends('base')



@section('content')
    <img src="{{ asset('img/cmr.svg') }}" width="310" height="auto">
        <h1> Salut depuis le quebec</h1>

        <p>It's currently {{ date('H:i A')}} .</p>
@endsection
