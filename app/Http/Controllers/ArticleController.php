<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Events\NewArticle;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::latest()->get();
        return view('article.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('article.add-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request) {
        $article = Article::create($request->all());

        if ($article) {
            event(new NewArticle($article));
            flash('Article successfully created.', 'success')->important();
            return redirect()->route('article.show', ['article' => $article]);
        } else {
            flash('Something went wrong.', 'danger')->important();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) {
        return view('article.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        return view('article/edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article) {
        $article->title = request('title');
        $article->text = request('text');

        if ($article->save()) {
            flash('Article successfully updated.', 'success')->important();
            return redirect()->route('article.show', ['article' => $article]);
        } else {
            flash('Something went wrong.', 'danger')->important();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        if ($article->delete()) {
            flash('Article successfully deleted.', 'success')->important();
            return redirect()->route('article.index');
        } else {
            flash('Something went wrong.', 'danger')->important();
            return back();
        }
    }
}
