<div class="form-group">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">    
{!! Form::label('body', 'Body:') !!}
{!! Form::textarea('body', null, ['class' => 'form-control']) !!}    
</div>
<div class="form-group">
{!! Form::input('hidden','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}  
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>