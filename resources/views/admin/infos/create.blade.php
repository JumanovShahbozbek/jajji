@extends('admin.layouts.layout')

@section('infos')
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

    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ma'lumot qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.infos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_uz"
                                            value="{{ old('title_uz') }}">
                                        @error('title_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_ru"
                                            value="{{ old('title_ru') }}">
                                        @error('title_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title en</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title_en"
                                            value="{{ old('title_en') }}">
                                        @error('title_en')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">icon</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="icon">
                                        @error('icon')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">description uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="ckeditor form-control" name="description_uz" value="{{ old('description_uz') }}"></textarea>
                                        @error('description_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">description ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="ckeditor form-control" name="description_ru" value="{{ old('description_ru') }}"></textarea>
                                        @error('description_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">description en</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="ckeditor form-control" name="description_en" value="{{ old('description_en') }}"></textarea>
                                        @error('description_en')
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
