@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

    <article>

        {{ $article->body }}

    </article>
    <br>
    <a href="{{ url('/articles') }}">Go Back</a>
@stop