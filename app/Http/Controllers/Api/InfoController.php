<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    
    public function index()
    {
        $infos = Info::all();

        return $infos;
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
        ]);

        // $requestData = $request->all();

        $data = Info::create($request->all());

        return $data; 
    }

    
    public function show($id)
    {
        $info = Info::find($id);

        return $info;
    }

    
    public function update(Request $request, Info $info)
    {
        //
    }

    
    public function destroy(Info $info)
    {
        //
    }
}
