<div class="form-group">
  {!! Form::label('title', 'Title') !!}
  {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter title']) !!}
</div>

<div class="form-group">
  {!! Form::label('text', 'Text') !!}
  {!! Form::textarea('text', null, ['class' => 'form-control', 'id' => 'text', 'placeholder' => 'Enter text']) !!}
</div>

<div class="form-group">
  {!! Form::label('published_at', 'Publish on') !!}
  {!! Form::date('published_at', date('Y-m-d'), ['class' => 'form-control', 'id' => 'published_at']) !!}
</div>

<div class="form-group">
  {!! Form::label('tag_list', 'Tags') !!}
  {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'id' => 'tags', 'multiple']) !!}
</div>
{!! Form::submit($submit_btn, ['class' => 'btn btn-submit']) !!}