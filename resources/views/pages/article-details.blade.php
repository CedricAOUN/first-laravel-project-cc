@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<div>
    @if(!$article)
    <h2>L'article {{ $id }} n'existe pas.</h2>
    @else
    <h2>Details pour l'Article : {{ $id }}</h2>
    <h3> {{ $article->title }} </h3>
    <p> {{ $article->description }} </p>
    @endif
</div>
@endsection