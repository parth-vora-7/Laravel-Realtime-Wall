@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">Add article</div>
            <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                    @include('errors.error')
                    {!! Form::open(['route' => 'article.store', 'method' => 'post']) !!}
                    @include('article.partials.article-fields', ['submit_btn' => 'Add article'])
                    {!! Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection