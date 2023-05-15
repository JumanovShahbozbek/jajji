<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Requests\GroupStoreRequest;

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

    
    public function store(GroupStoreRequest $request)
    {
        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
           $requestData['icon'] = $this->upload_file();
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

    
    public function update(GroupStoreRequest $request, Group $group)
    {
        $requestData = $request->all();
        
        if($request->hasFile('icon'))
        {
            if(isset($group->icon) && file_exists(public_path('/icon/'. $group->icon)))
            {
            unlink(public_path('/icon/'. $group->icon));
            }

            $requestData['icon'] = $this->upload_file(); 
        }

        $group->update($requestData);

        return redirect(route('admin.groups.index'));
    }

    
    public function destroy(Group $group)
    {
        if(isset($group->icon) && file_exists(public_path('/icon/'. $group->icon)))
        {
            unlink(public_path('/icon/'. $group->icon));
        }

        $group->delete();

        return redirect()->route('admin.groups.index');
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icon/', $fileName);
        $requestData['icon'] = $fileName;
        return $fileName;
    }
}
