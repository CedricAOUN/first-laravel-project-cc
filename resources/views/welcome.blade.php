@extends('layouts.app')

@section('title', config('app.name', 'Laravel'))

@section('content')
    <h2>Bienvenue sur le site de {{ $name }} !</h2>
@endsection