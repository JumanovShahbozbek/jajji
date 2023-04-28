<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function group()
    {
        return view('pages.group');
    }

    public function team()
    {
        return view('pages.team');
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
        return view('pages.blog');
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
        return $request;
        DB::table('copmlants')->insert([
            'name' => $request->name,
            'comp' => $request->comp,
        ]);

        return back();
    }

}
