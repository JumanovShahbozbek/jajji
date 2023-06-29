@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Yangi o'qituvchi qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Darajasi</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="status" id="" class="form-control">
                                            <option value="0">Raxbariyat</option>
                                            <option value="1">O'qituvchi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">icon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tgram</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('tgram') }}"
                                            name="tgram">
                                        @error('tgram')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">fbook</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('fbook') }}"
                                            name="fbook">
                                        @error('fbook')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">insta</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('insta') }}"
                                            name="insta">
                                        @error('insta')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('name') }}"
                                            name="name">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('job_uz') }}"
                                            name="job_uz">
                                        @error('job_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('job_ru') }}"
                                            name="job_ru">
                                        @error('job_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job en</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('job_en') }}"
                                            name="job_en">
                                        @error('job_en')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
