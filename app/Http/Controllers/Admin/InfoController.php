<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    
    public function index()
    {
        $infos = Info::orderBy('id', 'DESC')->paginate(3);

        return view('admin.infos.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.infos.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'icon' => 'required|max:2048',
            'description' => 'required|min:20|max:150',
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Info::create($requestData);

        return redirect(route('admin.infos.index'));
    }

   
    public function show($id)
    {
        $info = Info::find($id);

        return view('admin.infos.show', compact('info'));
    }

   
    public function edit($id)
    {
        $info = Info::find($id);

        return view('admin.infos.edit', compact('info'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5|max:40',
            'icon' => 'required|max:2048',
            'description' => 'required|min:20|max:150',
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Info::find($id)->update($requestData);

        return redirect(route('admin.infos.index'));

        /* Info::find($id)->update($request->all());

        return redirect()->route('admin.infos.index'); */
    }

    
    public function destroy($id)
    {
        Info::find($id)->delete();

        return redirect()->route('admin.infos.index');
    }
}
