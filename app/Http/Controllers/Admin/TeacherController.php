<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
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

    
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'tgram' => 'required|max:20',
            'fbook' => 'required|max:20',
            'insta' => 'required|max:20',
            'surname' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:15',
            'subject' => 'required|min:5|max:15'
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
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

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|max:2048',
            'tgram' => 'required|max:20',
            'fbook' => 'required|max:20',
            'insta' => 'required|max:20',
            'surname' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:15',
            'subject' => 'required|min:5|max:15'
        ]);

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $file = request()->file('icon');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->move('icon/', $fileName);
            $requestData['icon'] = $fileName;
        }

        Teacher::find($id)->update($requestData);

        return redirect(route('admin.teachers.index'));
    }

   
    public function destroy($id)
    {
        Teacher::find($id)->delete();

        return redirect(route('admin.teachers.index'));
    }
}
