@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h3>Détails de l'article portant l’identifiant : {{ $id }}</h3>
@endsection