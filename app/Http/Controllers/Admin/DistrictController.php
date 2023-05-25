<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Region;


class DistrictController extends Controller
{
    public function index()
    {
        // $districts = District::orderBy('id', 'DESC')->paginate(3);

        $districts  = DB::table('districts')
        ->join('streets','districts.id','=','streets.district_id')
        ->select('districts.*','streets.*')->get();

        
        return view('admin.districts.index', compact('districts',));
    }

    public function create()
    {
        $regions = Region::all();

        return view('admin.districts.create', compact('regions'));
    }

    public function store(Request $request)
    {
        District::create($request->all());

        return redirect(route('admin.districts.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $district = District::find($id);

        return view('admin.districts.show', compact('district'));
    }

    public function edit($id)
    {
        $district = District::find($id);

        return view('admin.districts.edit', compact('district',));
    }

    public function update(Request $request, $id)
    {
        District::find($id)->update($request->all());

        return redirect()->route('admin.districts.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        District::find($id)->delete();

        return redirect()->route('admin.districts.index')->with('success', 'Malumot mavaffaqiyatli ochirildi');
    } 
}
