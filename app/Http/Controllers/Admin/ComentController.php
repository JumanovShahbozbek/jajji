<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coment;
use Illuminate\Http\Request;
use App\Http\Requests\ComentStoreRequest;

class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::orderBY('id', 'DESC')->paginate(2);

        return view('admin.coments.index', compact('coments'));
    }


    public function create()
    {
        return view('admin.coments.create');
    }


    public function store(ComentStoreRequest $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $requestData['icon'] = $this->upload_file();
        }

        Coment::create($requestData);

        return redirect(route('admin.coments.index'));
    }


    public function show($id)
    {
        $coment = Coment::find($id);

        return view('admin.coments.show', compact('coment'));
    }


    public function edit($id)
    {
        $coment = Coment::find($id);

        return view('admin.coments.edit', compact('coment'));
    }


    public function update(ComentStoreRequest $request, $id)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $requestData['icon'] = $this->upload_file();
        }

        Coment::find($id)->update($requestData);

        return redirect()->route('admin.coments.index');
    }


    public function destroy($id)
    {
        Coment::find($id)->delete();

        return redirect()->route('admin.coments.index');
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('icon/', $fileName);
        $requestData['icon'] = $fileName;
        return $fileName;
    }
}
