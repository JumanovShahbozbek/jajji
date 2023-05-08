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
        $articles = Article::orderBY('id', 'DESC')->paginate(2);

        return view('admin.articles.index', compact('articles'));
    }


    public function create()
    {
        return view('admin.articles.create');
    }


    public function store(ArticleStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $requestData['icon'] = $this->upload_file();
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


    public function update(ArticleStoreRequest $request, $id)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $requestData['icon'] = $this->upload_file();
        }

        Article::find($id)->update($requestData);

        return redirect()->route('admin.articles.index');
    }


    public function destroy($id)
    {
        Article::find($id)->delete();

        return redirect(route('admin.articles.index'));
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('icon/', $fileName);
        $requestData['icon'] = $fileName;
        return $fileName;
    }
}
