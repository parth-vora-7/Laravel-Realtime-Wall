import Echo from "laravel-echo"

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: 'http://localhost:6001'
});

window.Echo.channel('new-article')
    .listen('NewArticle', (data) => {

        if($('#article-container').length) {
        	var articleTmp = $('.article-tmp');
        	var articleEle = articleTmp.clone().prependTo('#article-container').hide();
        	articleEle.find('h3 a').text(data.article.title);
        	articleEle.find('blockquote').text(data.article.text);
        	articleEle.removeClass('article-tmp hidden').show();
		$('.no-article').hide();
        }
});
