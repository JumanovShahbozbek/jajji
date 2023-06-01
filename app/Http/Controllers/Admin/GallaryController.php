<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GallaryStoreRequest;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        $gallaries = Gallary::orderBy('id', 'DESC')->get();

        return view('admin.gallaries.index', compact('gallaries'));
    }

    public function create()
    {
        return view('admin.gallaries.create');
    }

    
    public function store(GallaryStoreRequest $request, Gallary $gallary)
    {
        $requestData = $request->all();

        if($request->hasFile('image'))
        {
            $requestData['image'] = $this->upload_file();
        }

        Gallary::create($requestData);

        return redirect(route('admin.gallaries.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
    }

   
    public function show($id)
    {
        $gallary = Gallary::find($id);

        return view('admin.gallaries.show', compact('gallary'));
    }

   
    public function edit($id)
    {
        $gallary = Gallary::find($id);

        return view('admin.gallaries.edit', compact('gallary'));
    }

   
    public function update(GallaryStoreRequest $request, Gallary $gallary)
    {
        $requestData = $request->all();

        if($request->hasFile('image'))
        {
            $this->unlink_file($gallary);

            $requestData['image'] = $this->upload_file();
        }

        $gallary->update($requestData);

        return redirect(route('admin.gallaries.index'))->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }

    
    public function destroy( Gallary $gallary)
    {
        $this->unlink_file($gallary);

        $gallary->delete();

        return redirect()->route('admin.gallaries.index')->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function unlink_file(Gallary $gallary)
    {
        if(isset($gallary->icon) && file_exists(public_path('/images/'. $gallary->image)))
        {
            unlink(public_path('/images/'. $gallary->image));
        }
    }

    public function upload_file()
    {
        $file = request()->file('image');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }  
}
