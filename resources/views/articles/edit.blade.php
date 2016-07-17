@extends('app')
@section('content')
<div class="col-md-12">
    <h1>Edit: {{ $article->title }}</h1>
    <hr/>
    
    {!! Form::model($article,['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        
        @include('articles.form', ['submitButtonText' => 'Update Article'])
    
    {!! Form::close() !!}
    
    
    @include ('errors.list')
   
    
</div>
@stop