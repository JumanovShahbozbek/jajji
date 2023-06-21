@extends('admin.layouts.layout')

@section('articles')
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
                    <a class="create__btn" href="{{ route('admin.articles.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{ route('admin.articles.update', $article->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <strong> Icon :</strong>
                    <input type="file" name="img" value="{{ $article->img }}" class="form-control"> <br>
                    @error('icon')
                        {{ $message }}
                    @enderror

                    <strong> title uz:</strong>
                    <input type="text" name="title_uz" value="{{ $article->title_uz }}" class="form-control"> <br>
                    @error('title_uz')
                        {{ $message }}
                    @enderror
                    <strong> title ru:</strong>
                    <input type="text" name="title_ru" value="{{ $article->title_ru }}" class="form-control"> <br>
                    @error('title_ru')
                        {{ $message }}
                    @enderror
                    <strong> title en:</strong>
                    <input type="text" name="title_en" value="{{ $article->title_en }}" class="form-control"> <br>
                    @error('title_en')
                        {{ $message }}
                    @enderror

                    <strong> Name :</strong>
                    <input type="text" name="name" value="{{ $article->name }}" class="form-control"> <br>
                    @error('name')
                        {{ $message }}
                    @enderror

                    <strong> content uz:</strong>
                    <input type="text" name="content_uz" value="{{ $article->content_uz }}" class="form-control"> <br>
                    @error('content_uz')
                        {{ $message }}
                    @enderror
                    <strong> content ru:</strong>
                    <input type="text" name="content_ru" value="{{ $article->content_ru }}" class="form-control"> <br>
                    @error('content_ru')
                        {{ $message }}
                    @enderror
                    <strong> content en:</strong>
                    <input type="text" name="content_en" value="{{ $article->content_en }}" class="form-control"> <br>
                    @error('content_en')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
