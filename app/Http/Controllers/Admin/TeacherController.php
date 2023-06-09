<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
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
        if (Teacher::count() >= 12)
            return back()->with('danger', 'malumot qoshib bolmaydi');

        return view('admin.teachers.create');
    }


    public function store(TeacherStoreRequest $request, Teacher $teacher)
    {
        if (Teacher::where('status', 0)->count() >= 4) 
            return back()->with('danger', 'raxbariyat boyicha malumot qoshib bolmaydi');
    
        if (Teacher::where('status', 1)->count() >= 8) 
            return back()->with('danger', 'oqituvchilar boyicha malumot qoshib bolmaydi');
        

        $user = auth()->user()->name;
        event(new AuditEvent('create', 'teachers', $user, $teacher));

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
        $user = auth()->user()->name;
        event(new AuditEvent('edit', 'teachers', $user, $teacher));
        $requestData = $request->all();

        if ($request->hasFile('image')) {
            $this->unlink_file($teacher);

            $requestData['image'] = $this->upload_file();
        }

        $teacher->update($requestData);

        return redirect(route('admin.teachers.index'))->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }


    public function destroy(Teacher $teacher)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'teachers', $user, $teacher));
        $this->unlink_file($teacher);

        $teacher->delete();

        return redirect(route('admin.teachers.index'))->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function unlink_file(Teacher $teacher)
    {
        if (isset($teacher->image) && file_exists(public_path('/image/' . $teacher->icon))) {
            unlink(public_path('/images/' . $teacher->icon));
        }
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
