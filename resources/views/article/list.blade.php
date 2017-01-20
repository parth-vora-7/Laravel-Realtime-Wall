@extends('layouts/app')

@section('content')
<div class="row">
    <div id="article-container" class="col-md-8 col-md-offset-2">
        @include('flash::message')
        @if($articles->count())
        @each('article.partials.article', $articles, 'article')
        @else
        <h3 class="bg-danger">Sorry, no article found.</h3>
        @include('article.partials.article', ['class' => 'hide'])
        @endif
    </div>
</div>
@endsection