
@extends('base')

@section('title', 'About Us | '.config('app.name'))

@section('content')

    <p>Built with &hearts; by Alex Jordan.</p>
    <a href="{{ route('app_home') }}"> Retour à la homepage </a>

@endsection
