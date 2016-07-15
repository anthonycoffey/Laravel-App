@extends('app')
@section('content')
<div class="col-md-12">
    <h1>Contact Me</h1>
    
    @if ($name)
    <p>{{ $name }}</p>
    @else
    <p>No name passed.</p>
    @endif

    @if ($email)
    <p>{{ $email }}</p>
    @else
    <p>No e-mail passed.</p>
    @endif
    
</div>
@stop

@section('footer')
    <script> alert("Test"); </script>
@stop
