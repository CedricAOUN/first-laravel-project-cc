@extends('layouts.app')

@section('title', config('app.name', 'Laravel'))

@section('content')
<h2>Bienvenue sur le site de {{ $name }} !</h2>
<h2>Liste des articles : </h2>
<div>
    @forelse ($articles as $article)
    <x-article title="{{ $article['title'] }}" description="{{ $article['description'] }}" />
    @empty
    <p>Aucun article disponible.</p>
    @endforelse
</div>
@endsection