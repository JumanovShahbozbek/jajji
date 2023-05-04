<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::orderBY('id', 'DESC')->paginate(2);

        return view('admin.groups.index', compact('groups'));
    }

   
    public function create()
    {
        return view('admin.groups.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:15|max:100',
            'age' => 'required|max:15',
            'seat' => 'required|max:15',
            'time' => 'required|max:15',
            'payment' => 'required|max:15',
        ]);

        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Group::create($requestData);

        return redirect(route('admin.groups.index'));
    }

    
    public function show($id)
    {
        $group = Group::find($id);

        return view('admin.groups.show', compact('group'));
    }

    
    public function edit($id)
    {
        $group = Group::find($id);

        return view('admin.groups.edit', compact('group'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:15|max:100',
            'age' => 'required|max:15',
            'seat' => 'required|max:15',
            'time' => 'required|max:15',
            'payment' => 'required|max:15',
        ]);

        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Group::find($id)->update($requestData);

        return redirect(route('admin.groups.index'));
    }

    
    public function destroy($id)
    {
        Group::find($id)->delete();

        return redirect()->route('admin.groups.index');
    }
}
