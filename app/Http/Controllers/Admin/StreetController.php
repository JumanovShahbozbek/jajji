<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Street;
use App\Models\Region;
use App\Models\District;
use Illuminate\Support\Facades\DB;

class StreetController extends Controller
{
    public function index()
    {
        $streets = DB::table('streets')->orderBy('id', 'DESC')->get(); 
        
        return view('admin.streets.index', compact('streets'));
    }

    public function create()
    {
        $regions = DB::table('regions')->get();
        $districts = DB::table('districts')->get();

        return view('admin.streets.create', compact('regions', 'districts'));
    }

     public function store(Request $request)
    {
        Street::create($request->all());

        return redirect(route('admin.streets.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

    public function show($id)
    {
        $street = DB::table('streets')
            ->where('streets.id', '=', $id)
            ->leftJoin('regions', 'streets.region_id', '=', 'regions.id')
            ->leftJoin('districts', 'streets.district_id', '=', 'districts.id')
            ->select('streets.*', 'districts.noun', 'regions.name')->first();

        return view('admin.streets.show', compact('street'));
    }

    public function edit($id)
    {
        $street = DB::table('streets')->where('id', $id)->first();

        return view('admin.streets.edit', compact('street',));
    }

    public function update(Request $request, $id)
    {
        Street::find($id)->update($request->all());

        return redirect()->route('admin.streets.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    public function destroy($id)
    {
        DB::table('streets')->where('id', $id)->delete();

        return redirect()->route('admin.streets.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
