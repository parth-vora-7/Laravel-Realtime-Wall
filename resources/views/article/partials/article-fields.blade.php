<div class="form-group">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter title', 'required' => 'required']) !!}
</div>

<div class="form-group">
  {!! Form::label('text', 'Text') !!}
  {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'text', 'placeholder' => 'Enter text', 'required' => 'required']) !!}
</div>

{!! Form::submit($submit_btn, ['class' => 'btn btn-submit']) !!}