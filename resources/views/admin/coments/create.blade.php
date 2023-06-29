@extends('admin.layouts.layout')

@section('coments')
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
                            <h4>Yangi Comment qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.coments.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">content uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('content_uz') }}"
                                            name="content_uz">
                                        @error('content_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">content ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('content_ru') }}"
                                            name="content_ru">
                                        @error('content_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">content en</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('content_en') }}"
                                            name="content_en">
                                        @error('content_en')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">img</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" value="{{ old('img') }}"
                                            name="img">
                                        @error('img')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">surname</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('surname') }}"
                                            name="surname">
                                        @error('surname')
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">job uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('job_uz') }}"
                                            name="job_uz">
                                        @error('job_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">job ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('job_ru') }}"
                                            name="job_ru">
                                        @error('job_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">job en</label>
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
