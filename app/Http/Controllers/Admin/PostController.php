<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(7);
        /* $categories = Category::all() */;

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $categories = Category::all();

        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        Post::find($id)->update($request->all());

        return redirect()->route('admin.posts.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    }
}