@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        @include('flash::message')
        <div class="panel panel-info">
            <div class="panel-heading">Article detail</div>
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    <div>
                        <b>Title:</b>
                        <p class="lead">{{ $article->title }}</p>
                    </div>
                    <div>
                        <b>Text:</b>
                        <blockquote class="blockquote">{{ $article->text }}</blockquote>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ route('article.edit', $article) }}">Edit</a>
                {{ Form::open(['route' => ['article.destroy', $article] , 
                        'method' => 'delete', 'style' => 'display:inline']) }}
                <input type="submit" value="Delete" class="btn-link" />
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection