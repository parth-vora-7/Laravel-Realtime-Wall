@can('delete-article', $article)
{!! Form::button('Delete', ['style' => 'background:none; border:none;color:red;', 'class' => 'btn btn-blog pull-right marginBottom10 btn-delete', 'data-toggle' => 'modal', 'data-target' => '#myModal', 'data-id' => $article->id, 'data-type' => 'Delete']) !!}
@endcan

@can('trash-article', $article)
{!! Form::button('Trash', ['style' => 'background:none; border:none;color:red;', 'class' => 'btn btn-blog pull-right marginBottom10 btn-delete', 'data-toggle' => 'modal', 'data-target' => '#myModal', 'data-id' => $article->id, 'data-type' => 'Trash']) !!}
@endcan

@can('restore-article', $article)
{!! link_to_route('articles.restore', 'Restore', $article->slug, ['class' => 'btn btn-blog pull-right marginBottom10']) !!}
@endcan

@can('update-article', $article)
{!! link_to_route('articles.edit', 'Edit', $article->slug, ['class' => 'btn btn-blog pull-right marginBottom10']) !!}
@endcan

@if(Request::route()->getName() !== 'articles.show')
{!! link_to('articles/' . $article->slug, 'Read more', ['class' => 'btn btn-blog pull-right marginBottom10']) !!}
@endif