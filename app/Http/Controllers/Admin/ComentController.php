<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComentStoreRequest;
use App\Models\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::orderBY('id', 'DESC')->paginate(4);

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

        if ($request->hasFile('img')) {
            $requestData['img'] = $this->upload_image();
        }

        Coment::create($requestData);

        return redirect(route('admin.coments.index'))->with('success', 'Malumot muvaffaqiyatli qoshildi');
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


    public function update(ComentStoreRequest $request, Coment $coment)
    {
        $requestData = $request->all();

        if ($request->hasFile('icon')) {
            $this->unlink_file($coment);
            $requestData['icon'] = $this->upload_file();
        }

        if ($request->hasFile('img')) {
            $this->unlink_image($coment);
            $requestData['img'] = $this->upload_image();
        }

        $coment->update($requestData);

        return redirect()->route('admin.coments.index')->with('success', 'Malumot mavaffaqiyatli ozgartirildi');
    }


    public function destroy(Coment $coment)
    {
        $this->unlink_file($coment);

        $this->unlink_image($coment);

        $coment->delete();

        return redirect()->route('admin.coments.index')->with('danger', 'Malumot muvaffaqiyatli ochirildi');
    }

    public function upload_file()
    {
        $file = request()->file('icon');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('icon/', $fileName);
        $requestData['icon'] = $fileName;
        return $fileName;
    }

    public function unlink_file(Coment $coment)
    {
        if (isset($coment->icon) && file_exists(public_path('/icon/' . $coment->icon))) {
            unlink(public_path('/icon/' . $coment->icon));
        }
    }

    public function upload_image()
    {
        $file = request()->file('img');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        $requestData['img'] = $fileName;
        return $fileName;
    }

    public function unlink_image(Coment $coment)
    {
        if (isset($coment->icon) && file_exists(public_path('/images/' . $coment->icon))) {
            unlink(public_path('/images/' . $coment->icon));
        }
    }
}
