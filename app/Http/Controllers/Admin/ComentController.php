<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentController extends Controller
{
    public function index()
    {
        $coments = DB::table('coments')->orderBY('id', 'DESC')->get();

        return view('admin.coments.index', compact('coments'));
    }

   
    public function create()
    {
        return view('admin.coments.create');
    }

    
    public function store(Request $request)
    {
        Coment::create($request->all());

        return redirect(route('admin.coments.index'));
    }

    
    public function show($id)
    {
        $coment = Coment::find($id);

        return view('admin.coments.show', compact('coment'));
    }

    
    public function edit($id)
    {
        $coment = Coment::find($id);

        return view('admin.coments.edit', compact('coment'));
    }

    
    public function update(Request $request, $id)
    {
        Coment::find($id)->update($request->all());

        return redirect()->route('admin.coments.index');
    }

    
    public function destroy($id)
    {
        Coment::find($id)->delete();

        return redirect()->route('admin.coments.index');
    }
}
