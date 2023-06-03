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
        $groups = Group::orderBY('id', 'DESC')->paginate(6);

        return view('admin.groups.index', compact('groups'));
    }


    public function create()
    {
        return view('admin.groups.create');
    }


    public function store(GroupStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $requestData['image'] = $this->upload_file();
        }

        Group::create($requestData);

        return redirect(route('admin.groups.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
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

        if ($request->hasFile('image')) {
            $this->unlink_file($group);

            $requestData['image'] = $this->upload_file();
        }

        $group->update($requestData);

        return redirect(route('admin.groups.index'))->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }


    public function destroy(Group $group)
    {
        $this->unlink_file($group);

        $group->delete();

        return redirect()->route('admin.groups.index')->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function unlink_file(Group $group)
    {
        if (isset($group->icon) && file_exists(public_path('/images/' . $group->icon))) {
            unlink(public_path('/images/' . $group->icon));
        }
    }

    public function upload_file()
    {
        $file = request()->file('image');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);

        return $fileName;
    }
}
