<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Street;
use App\Models\Region;
use App\Models\District;

class StreetController extends Controller
{
    public function index()
    {
        $streets = Street::orderBy('id', 'DESC')->get();

        return view('admin.streets.index', compact('streets'));
    }

    public function create()
    {
        $regions = Region::all();
        $districts = District::all();

        return view('admin.streets.create', compact('regions', 'districts'));
    }

    public function store(Request $request)
    {
        Street::create($request->all());

        return redirect(route('admin.streets.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $street = Street::find($id);

        return view('admin.streets.show', compact('street'));
    }

    public function edit($id)
    {
        $street = Street::find($id);

        return view('admin.streets.edit', compact('street',));
    }

    public function update(Request $request, $id)
    {
        Street::find($id)->update($request->all());

        return redirect()->route('admin.streets.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Street::find($id)->delete();

        return redirect()->route('admin.streets.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    } 
}
