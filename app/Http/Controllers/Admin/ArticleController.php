<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->orderBY('id', 'DESC')->get();

        return view('admin.articles.index', compact('articles'));
    }

   
    public function create()
    {
        return view('admin.articles.create');
    }

    
    public function store(Request $request)
    {
        Article::create($request->all());

        return redirect(route('admin.articles.index'));
    }

    
    public function show($id)
    {
        $article = Article::find($id);

        return view('admin.articles.show', compact('article'));
    }

    
    public function edit($id)
    {
        $article = Article::find($id);

        return view('admin.articles.edit', compact('article'));
    }

    
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());

        return redirect()->route('admin.articles.index');
    }

    
    public function destroy($id)
    {
        Article::find($id)->delete();

        return redirect(route('admin.articles.index'));
    }
}
