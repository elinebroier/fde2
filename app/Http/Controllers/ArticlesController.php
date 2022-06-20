<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {

        // Render a list of a resource
        $article = Article::latest()->get();

        return view('articles.index', ['article' => $article]);
    }

    public function show(Article $article)
    {
        // Show a single resource

        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        // Shows a view to create a new resource
        return view('articles.create');

    }

    public function store(Request $request)
    {
        // Persist the new resource

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
        //return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // Find the article associated with the id


        // Show a view to edit an existing resource
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        // Persist the edited resource
        $article->update($this->validateArticle());

        return redirect($article->path());
       // return redirect('/articles/'. $article->id); //return redirect($article->path());
    }

    public function destroy($id)
    {
        // Delete the resource
        Article::find($id)->delete();

        return redirect(route('articles.index'));
        //return redirect('/articles');

    }

    /**
     * @return array
     */
    protected function validateArticle(): array
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}

