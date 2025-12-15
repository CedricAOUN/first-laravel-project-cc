@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h2>Détails de l'article portant l’identifiant : {{ $id }}</h2>
@endsection