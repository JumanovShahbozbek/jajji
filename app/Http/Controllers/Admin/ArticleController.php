<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->orderBy('id', 'DESC')->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        DB::table('articles')->insert([
            'icon' => $request->icon,
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.articles.index');
    }

    public function show($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();

        return view('admin.articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = DB::table('articles')->where('id', $id)->first();

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        DB::table('articles')->where('id', $id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'name' => $request->name,
            'content'=> $request->content,
        ]);

        return redirect()->route('admin.articles.index');
    }

    public function destroy($id)
    {
        DB::table('articles')->where('id', $id)->delete();

        return redirect()->route('admin.articles.index');
    }
}
