<article class="bg-info {{ $class or '' }}">
	<h3><a href="{{ route('article.show', !empty($article->id)) }}">{{ $article->title or '' }}</a></h3>
	<blockquote>{{ $article->text or '' }}</blockquote>
</article>