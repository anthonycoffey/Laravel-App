@extends('app')
@section('content')

    <h1>All Articles</h1>
    
        @foreach ($articles as $article) 
        <article>
            <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
 
    

@stop

@section('footer')
    
@stop
