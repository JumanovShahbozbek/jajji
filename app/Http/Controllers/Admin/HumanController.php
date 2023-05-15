<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Human;
use App\Models\Number;

class HumanController extends Controller
{
    public function index()
    {
        $humans = Human::orderBy('id', 'DESC')->paginate(3);

        return view('admin.humans.index', compact('humans'));
    }

    public function create()
    {
        return view('admin.humans.create');
    }

    public function store(Request $request)
    {
        Human::create($request->all());

        return redirect()->route('admin.humans.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $human = Human::find($id);

        return view('admin.humans.show', compact('human'));
    }

    public function edit($id)
    {
        $human = Human::find($id);

        return view('admin.humans.edit', compact('human'));
    }

    public function update(Request $request, $id)
    {
        Human::find($id)->update($request->all());

        return redirect()->route('admin.humans.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi ');
    }

    public function destroy($id)
    {
        Human::find($id)->delete();
        
        return redirect()->route('admin.humans.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    }
}