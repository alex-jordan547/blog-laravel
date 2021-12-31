@extends('base')


@section('content')



        <img src="{{ asset('img/cmr.svg') }}" width="500" height="auto" class="rounded shadow">
        <h1 class="text-secondary"> Hello from Cameroun </h1>
        <p>It's currently <span class="text-success ">{{ date('H:i A')}}.</span></p>



@endsection
