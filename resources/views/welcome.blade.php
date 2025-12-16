@extends('layouts.app')

@section('title', config('app.name', 'Laravel'))

@section('content')
<h2>Bienvenue sur le site de {{ $name }} !</h2>
<h2>Liste des articles : </h2>
<div>
    <x-article title="L’IA soigne mieux" description="L’intelligence artificielle aide les médecins à diagnostiquer plus vite." />
    <x-article title="Villes vertes" description="Les métropoles deviennent plus écologiques et durables." />
    <x-article title="Télétravail" description="Plus de liberté, mais aussi plus de solitude." />
</div>
@endsection