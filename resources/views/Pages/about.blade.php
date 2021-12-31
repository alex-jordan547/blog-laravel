
@extends('base')

@section('title', 'About Us | '.config('app.name'))

@section('content')

    <img src="{{ asset('img/profil.jpg') }}" width="200" height="auto">
    <p>Built with &hearts; by Alex Jordan.</p>
    <a href="{{ route('app_home') }}"> Retour à la homepage </a>

@endsection
