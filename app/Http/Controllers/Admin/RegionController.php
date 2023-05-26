<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::orderBy('id', 'DESC')->paginate(3);

        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        Region::create($request->all());

        return redirect(route('admin.regions.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $region = Region::find($id);

        return view('admin.regions.show', compact('region'));
    }

    public function edit($id)
    {
        $region = Region::find($id);

        return view('admin.regions.edit', compact('region',));
    }

    public function update(Request $request, $id)
    {
        Region::find($id)->update($request->all());

        return redirect()->route('admin.regions.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        Region::find($id)->delete();

        return redirect()->route('admin.regions.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    } 
}
