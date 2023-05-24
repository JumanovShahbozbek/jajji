@extends('admin.layouts.layout')

@section('posts')
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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>O'zgartirish</h3>
                    <a class="create__btn" href="{{ route('admin.posts.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>
                <div class="card-body">
                    <form class="create__inputs" action="{{ route('admin.posts.update', $post->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">maqolaa</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="title" value="{{ $post->title }}" class="form-control"> <br>
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="category_id" class="form-control" id="">
                                    <option value="{{ $post->category_id }}"> {{ $post->category->name }} </option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" value="Ozgartirish">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
