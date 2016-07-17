@extends('app')
@section('content')
<div class="col-md-12">
    <h1>Write a new article</h1>
    <hr/>
    
    {!! Form::open(['url' => 'articles']) !!}

        @include('articles.form', ['submitButtonText' => 'Add Article'])
    
    {!! Form::close() !!}
    
    
    @include('errors.list')
   
    
</div>
@stop