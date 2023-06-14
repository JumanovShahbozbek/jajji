<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coment;
use App\Models\Gallary;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function get_welcome()
    {
        $infos = Info::orderBy('id', 'DESC')->take(6)->get();
        $groups = Group::orderBy('id', 'DESC')->take(3)->get();
        $teachers = Teacher::orderBy('id', 'DESC')->where('status', 1)->take(4)->get();
        $coments = Coment::orderBy('id', 'DESC')->take(4)->get();
        $articles = Article::orderBy('id', 'DESC')->take(3)->get();

        return view('welcome', compact('infos', 'groups','teachers','coments', 'articles'));
    }

    public function get_group()
    {
        $groups = Group::orderBy('id', 'DESC')->get();

        return view('pages.group', compact('groups'));
    }

    public function get_team()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->where('status', 0)->take(4)->get();
        $teachers1 = Teacher::orderBy('id', 'DESC')->where('status', 1)->take(8)->get();
        $coments = Coment::orderBy('id', 'DESC')->get();

        return view('pages.team', compact('teachers', 'coments', 'teachers1'));
    }

    public function get_achievements()
    {   
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('pages.achievements', compact('articles'));
    }

    public function get_gallery()
    {
        $gallaries = Gallary::orderBy('id', 'DESC')->get();

        return view('pages.gallery', compact('gallaries'));
    }

    public function get_blog()
    {
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('pages.blog', compact('articles'));
    }

    public function post_registers(Request $request)
    {
        // return $request;
        DB::table('registers')->insert([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
        ]);

        return back();
    }

    public function post_copmlants(Request $request)
    {
        
        DB::table('copmlants')->insert([
            'name' => $request->name,
            'comp' => $request->comp,
        ]);

        return back();
    }

}
