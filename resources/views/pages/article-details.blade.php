@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<div>
    <h2>Details pour l'Article : {{ $id }}</h2>
    <h3> {{ $article->title }} </h3>
    <p> {{ $article->description }} </p>
</div>
@endsection