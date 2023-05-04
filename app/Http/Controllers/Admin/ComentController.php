<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::orderBY('id', 'DESC')->paginate(2);

        return view('admin.coments.index', compact('coments'));
    }

   
    public function create()
    {
        return view('admin.coments.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'content' => 'required|min:10|max:100',
            'img' => 'required|max:20',
            'surname' => 'required|min:4|max:15',
            'name' => 'required|min:3|max:15',
            'subject' => 'required|min:5|max:15',
        ]);

        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Coment::create($requestData);

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
        $request->validate([
            'icon' => 'required|max:2048',
            'content' => 'required|min:10|max:100',
            'img' => 'required|max:20',
            'surname' => 'required|min:4|max:15',
            'name' => 'required|min:3|max:15',
            'subject' => 'required|min:5|max:15',
        ]);

        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Coment::find($id)->update($requestData);

        return redirect()->route('admin.coments.index');
    }

    
    public function destroy($id)
    {
        Coment::find($id)->delete();

        return redirect()->route('admin.coments.index');
    }
}
