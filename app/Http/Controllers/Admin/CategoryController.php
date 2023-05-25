<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::orderBy('id', 'DESC')->paginate(3);
        
        $categories = DB::table('categories')
        /* $posts = Post::all() */
        ->join('posts', 'categories.id', '=', 'posts.category_id')
        ->select('categories.*', 'posts.*')->get()/* ->paginate(7) */;
        // return $categories;
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        /* $posts = Post::find($id); */

        $category = Category::find($id);

        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    }
}