@extends('layouts.app')

@section('title', config('app.name', 'Laravel'))

@section('content')
    <h3>Bienvenue sur le site de {{ $name }} !</h3>
@endsection