@extends('admin.layouts.layout')

@section('groups')
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
                            <h4>Yangi guruh qo'shish</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.groups.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasm</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('title_uz') }}"
                                            name="title_uz">
                                        @error('title_uz')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title ru</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('title_ru') }}"
                                            name="title_ru">
                                        @error('title_ru')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('title_en') }}"
                                            name="title_en">
                                        @error('title_en')
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">age</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" value="{{ old('age') }}"
                                            name="age">
                                        @error('age')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">seat</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" value="{{ old('seat') }}"
                                            name="seat">
                                        @error('seat')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">time</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" value="{{ old('time') }}"
                                            name="time">
                                        @error('time')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">payment</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control"value="{{ old('payment') }}"
                                            name="payment">
                                        @error('payment')
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
