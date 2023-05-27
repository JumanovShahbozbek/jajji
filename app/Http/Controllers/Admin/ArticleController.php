<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBY('id', 'DESC')->paginate(4);

        return view('admin.articles.index', compact('articles'));
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(ArticleStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $requestData['img'] = $this->upload_file();
        }

        Article::create($requestData);

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


    public function update(ArticleStoreRequest $request, Article $article)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) 
        {
            if(isset($article->icon) && file_exists(public_path('/images/'. $article->icon)))
            {
                unlink(public_path('/images/'. $article->icon));
            }

            $requestData['img'] = $this->upload_file();
        }

        $article->update($requestData);

        return redirect()->route('admin.articles.index');
    }


    public function destroy(Article $article)
    {
        if(isset($article->icon) && file_exists(public_path('/images/'. $article->icon)))
        {
            unlink(public_path('/images/'. $article->icon));
        }
        $article->delete();

        return redirect(route('admin.articles.index'));
    }

    public function upload_file()
    {
        $file = request()->file('img');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $requestData['img'] = $fileName;
        return $fileName;
    }
}
