
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

/*const app = new Vue({
    el: '#app'
});*/

import Echo from "laravel-echo"

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: 'http://localhost:6001'
});

window.Echo.channel('new-article')
    .listen('NewArticle', (data) => {
        if($('#article-container').length) {
        	var articleTmp = $('#article-container').find('article:first');
        	var articleEle = articleTmp.clone().prependTo('#article-container').hide();
        	articleEle.find('h3 a').text(data.article.title);
        	articleEle.find('blockquote').text(data.article.text);
        	articleEle.show();
        }
});