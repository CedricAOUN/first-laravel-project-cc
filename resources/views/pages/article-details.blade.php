@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
<x-article title="{{ $article->title }}" description="{{ $article->description }}" />
@endsection