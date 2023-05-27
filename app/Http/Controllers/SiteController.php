<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coment;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function welcome()
    {
        $infos = Info::orderBy('id', 'DESC')->get();
        $groups = Group::orderBy('id', 'DESC')->take(3)->get();
        $teachers = Teacher::orderBy('id', 'DESC')->take(4)->get();
        $coments = Coment::orderBy('id', 'DESC')->get();
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();

        return view('welcome', compact('infos', 'groups','teachers','coments', 'articles'));
    }

    public function group()
    {
        $groups = Group::orderBy('id', 'DESC')->get();

        return view('pages.group', compact('groups'));
    }

    public function team()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->get();
        $coments = Coment::orderBy('id', 'DESC')->get();

        return view('pages.team', compact('teachers', 'coments'));
    }

    public function achievements()
    {
        return view('pages.achievements');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('pages.blog', compact('articles'));
    }

    public function registers(Request $request)
    {
        // return $request;
        DB::table('registers')->insert([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
        ]);

        return back();
    }

    public function copmlants(Request $request)
    {
        
        DB::table('copmlants')->insert([
            'name' => $request->name,
            'comp' => $request->comp,
        ]);

        return back();
    }

}
