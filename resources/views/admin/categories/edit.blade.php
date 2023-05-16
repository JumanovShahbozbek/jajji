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
                    <strong> Category :</strong>
                    <input type="text" name="category" value="{{ $category->category }}" class="form-control"> <br>
                    @error('category')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection