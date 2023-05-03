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
                    <input type="file" name="icon" value="{{ $article->icon }}" class="form-control"> <br>

                    <strong> title :</strong>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control"> <br>

                    <strong> Name :</strong>
                    <input type="text" name="name" value="{{ $article->name }}" class="form-control"> <br>

                    <strong> content :</strong>
                    <input type="text" name="content" value="{{ $article->content }}" class="form-control"> <br>

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
