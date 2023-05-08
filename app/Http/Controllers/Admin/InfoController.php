<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use App\Http\Requests\InfoStoreRequest;

class InfoController extends Controller
{
    
    public function index()
    {
        $infos = Info::orderBy('id', 'DESC')->paginate(3);

        return view('admin.infos.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.infos.create');
    }

    
    public function store(InfoStoreRequest $request)
    {
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $requestData['icon'] = $this->upload_file();
        }

        Info::create($requestData);

        return redirect(route('admin.infos.index'));
    }

   
    public function show($id)
    {
        $info = Info::find($id);

        return view('admin.infos.show', compact('info'));
    }

   
    public function edit($id)
    {
        $info = Info::find($id);

        return view('admin.infos.edit', compact('info'));
    }

   
    public function update(InfoStoreRequest $request, $id)
    {
        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
           $requestData['icon'] = $this->upload_file();
        }

        Info::find($id)->update($requestData);

        return redirect(route('admin.infos.index'));
    }

    
    public function destroy($id)
    {
        Info::find($id)->delete();

        return redirect()->route('admin.infos.index');
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icon/', $fileName);
        return $fileName;
    }
}
