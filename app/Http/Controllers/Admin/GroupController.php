<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    public function index()
    {
        $groups = DB::table('groups')->orderBy('id', 'DESC')->get();

        return view('admin.groups.index', compact('groups'));
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(Request $request)
    {
       /* dd($request); */
       DB::table('groups')->insert([
        'icon' => $request->icon,
        'title' => $request->title,
        'content' => $request->content,
        'age' => $request->age,
        'seat' => $request->seat,
        'time' => $request->time,
        'payment' => $request->payment,
       ]);

       return redirect()->route('admin.groups.index');
    }

    public function show($id)
    {
        $group = DB::table('groups')->where('id', $id)->first();

        return view('admin.groups.show', compact('group'));
    }

    public function edit($id)
    {
        $group = DB::table('groups')->where('id', $id)->first();

        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
        DB::table('groups')->where('id', $id)->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'content' => $request->content,
            'age' => $request->age,
            'seat' => $request->seat,
            'time' => $request->time,
            'payment' => $request->payment,
        ]);

        return redirect()->route('admin.groups.index');
    }

    public function destroy($id)
    {
        DB::table('groups')->where('id', $id)->delete();

        return redirect()->route('admin.groups.index');
    }
}
