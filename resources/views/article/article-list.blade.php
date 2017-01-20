@extends('app')
@section('content')
<div class="container">
    @include('message')
    
    @if($articles->all())
    <div id="blog" class="row class="col-md-10 col-md-offset-1 blogShort"> 
         @include('article.partials.article-delete-confirmbox')
         @foreach($articles as $article)
         <div>
            <h1>{!! link_to('articles/' . $article->slug, $article->title) !!}</h1>
            <div>
                <em>Posted by: {{ \App\User::find($article->uid) ? \App\User::find($article->uid)->name : 'Not exist' }}</em> |
                <em>Posted on: {{ $article->created_at }}</em>
            </div>
            <article>{{ str_limit($article->text, 500) }}</article>
            <div>
                @include('article/partials/article-links')
            </div>
        </div>
        @endforeach
        <div class="text-center">
            <div class="pagination">
                {!! $articles->links() !!}
            </div>
        </div>
    </div>
    @else
    <div><h4>No articles to display</h4></div>
    @endif
</div>
@endsection