@extends('base')


@section('title', 'About Us | '.config('app.name'))

@section('content')

    <img src="{{ asset('img/profil.jpg') }}" width="300" height="auto">
    <p>Built with <span class="text-danger">&hearts;</span> by Alex Jordan.</p>
    <a href="{{ route('app_home') }}"> Back to Home </a>

@endsection
