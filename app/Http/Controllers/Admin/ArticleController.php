<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'title' => 'required|max:20',
            'name' => 'required|max:15',
            'content' => 'required|max:100'
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
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

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'title' => 'required|max:20',
            'name' => 'required|max:15',
            'content' => 'required|max:100'
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Article::find($id)->update($requestData);

        return redirect()->route('admin.articles.index');
    }

    
    public function destroy($id)
    {
        Article::find($id)->delete();

        return redirect(route('admin.articles.index'));
    }
}
