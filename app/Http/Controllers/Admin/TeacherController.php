<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherStoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBY('id', 'DESC')->get();

        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('admin.teachers.create');
    }


    public function store(TeacherStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $requestData['image'] = $this->upload_file();
        }

        Teacher::create($requestData);

        return redirect(route('admin.teachers.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
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


    public function update(TeacherStoreRequest $request, Teacher $teacher)
    {
        $requestData = $request->all();

        if ($request->hasFile('image')) 
        {
            if (isset($teacher->icon) && file_exists(public_path('/images/' . $teacher->icon))) 
            {
                unlink(public_path('/images/' . $teacher->icon));
            }

            $requestData['image'] = $this->upload_file();
        }

        $teacher->update($requestData);

        return redirect(route('admin.teachers.index'))->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }


    public function destroy(Teacher $teacher)
    {
        if(isset($teacher->image) && file_exists(public_path('/image/'. $teacher->icon)))
        {
            unlink(public_path('/images/'. $teacher->icon));
        }

        $teacher->delete();

        return redirect(route('admin.teachers.index'))->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function upload_file()
    {
        $file = request()->file('image');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $requestData['image'] = $fileName;
        return $fileName;
    }
}
