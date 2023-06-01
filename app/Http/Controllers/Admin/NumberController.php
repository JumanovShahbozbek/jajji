<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Number;

class NumberController extends Controller
{
    public function index()
    {
        $numbers = Number::orderBy('id', 'DESC')->paginate(3);

        return view('admin.numbers.index', compact('numbers'));
    }

    public function create()
    {
        return view('admin.numbers.create');
    }

    public function store(Request $request)
    {
        Number::create($request->all());

        return redirect()->route('admin.numbers.index')->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $number = Number::find($id);

        return view('admin.numbers.show', compact('number'));
    }

    public function edit($id)
    {
        $number = Number::find($id);

        return view('admin.numbers.edit', compact('number'));
    }

    public function update(Request $request, $id)
    {
        Number::find($id)->update($request->all());

        return redirect()->route('admin.numbers.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Number::find($id)->delete();

        return redirect()->route('admin.numbers.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}