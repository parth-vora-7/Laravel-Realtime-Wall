@extends('app')
@section('content')
<div class="container">
  <div class="row">
    @include('article.partials.article-delete-confirmbox')
    <div>
      <h1>{!! link_to('articles/' . $article->slug, $article->title) !!}</h1>
      <em>Posted on: {{ $article->created_at }}</em>
      <article>{{ $article->text }}</article>
    </div>
    <div>
      @include('article/partials/article-links')
    </div>
    <div>
      @unless(!empty($article->tags))
      <b>Tags:</b>
      @foreach($article->tags as $tag)
      <em><a>{{ $tag->name }}</a></em>
      @endforeach
      @endunless
    </div>
  </div>
</div>
@endsection