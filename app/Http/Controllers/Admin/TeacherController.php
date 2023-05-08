<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreRequest;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::orderBY('id', 'DESC')->paginate(2);

        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('admin.teachers.create');
    }


    public function store(TeacherStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) 
        {
            $requestData['icon'] = $this->upload_file();
        }

        Teacher::create($requestData);

        return redirect(route('admin.teachers.index'));
    }


    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.show', compact('teacher'));
    }


    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.edit', compact('teacher'));
    }


    public function update(TeacherStoreRequest $request, $id)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) 
        {
           $requestData['icon'] = $this->upload_file();
        }

        Teacher::find($id)->update($requestData);

        return redirect(route('admin.teachers.index'));
    }


    public function destroy($id)
    {
        Teacher::find($id)->delete();

        return redirect(route('admin.teachers.index'));
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('icon/', $fileName);
        $requestData['icon'] = $fileName;
        return $fileName;
    }
}
