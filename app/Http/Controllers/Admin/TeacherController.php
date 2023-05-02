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
        $teachers = DB::table('teachers')->orderBY('id', 'DESC')->get();

        return view('admin.teachers.index', compact('teachers'));
    }

    
    public function create()
    {
        return view('admin.teachers.create');
    }

    
    public function store(Request $request)
    {
        Teacher::create($request->all());

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
        Teacher::find($id)->update($request->all());

        return redirect(route('admin.teachers.index'));
    }

   
    public function destroy($id)
    {
        Teacher::find($id)->delete();

        return redirect(route('admin.teachers.index'));
    }
}
