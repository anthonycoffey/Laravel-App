@extends('app')
@section('content')
<div class="col-md-12">

<h1>About Me</h1>
    
@if (count($hobbies))
    <h3>My Hobbies</h3>
    <ul>
        @foreach($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
@endif
</div>
@stop

@section('footer')
 
@stop
