<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
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


    public function store(ArticleStoreRequest $request, Article $article)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'articles', $user, $article));
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $requestData['img'] = $this->upload_file();
        }

        Article::create($requestData);

        return redirect(route('admin.articles.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
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
        $user = auth()->user()->name;
        event(new AuditEvent('edit', 'articles', $user, $article));
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $this->unlink_file($article);
            $requestData['img'] = $this->upload_file();
        }

        $article->update($requestData);

        return redirect()->route('admin.articles.index')->with('success', 'Malumot muvaffaqiyatli ozgartirildi');
    }


    public function destroy(Article $article)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'articles', $user, $article));
        $this->unlink_file($article);
        $article->delete();

        return redirect(route('admin.articles.index'))->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function upload_file()
    {
        $file = request()->file('img');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $requestData['img'] = $fileName;
        return $fileName;
    }

    public function unlink_file(Article $article)
    {
        if (isset($article->icon) && file_exists(public_path('/images/' . $article->icon))) {
            unlink(public_path('/images/' . $article->icon));
        }
    }
}
