@extends('admin.layouts.layout')

@section('categories')
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
                    <a class="create__btn" href="{{ route('admin.categories.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{ route('admin.categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <strong> Category uz:</strong>
                    <input type="text" name="name_uz" value="{{ $category->name_uz }}" class="form-control"> <br>
                    @error('name_uz')
                        {{ $message }}
                    @enderror

                    <strong> Category ru:</strong>
                    <input type="text" name="name_ru" value="{{ $category->name_ru }}" class="form-control"> <br>
                    @error('name_ru')
                        {{ $message }}
                    @enderror

                    <strong> Category en:</strong>
                    <input type="text" name="name_en" value="{{ $category->name_en }}" class="form-control"> <br>
                    @error('name_en')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
