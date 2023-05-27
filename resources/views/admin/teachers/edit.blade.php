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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>O'zgartirish</h3>
                    <a class="create__btn" href="{{ route('admin.teachers.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>
                </div>

                <form class="create__inputs" action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <strong> Image :</strong>
                    <input type="file" name="image" value="{{ $teacher->image }}" class="form-control"> <br>
                    @error('image')
                        {{ $message }}
                    @enderror

                    <strong> Telegram :</strong>
                    <input type="text" name="tgram" value="{{ $teacher->tgram }}" class="form-control"> <br>
                    @error('tgram')
                        {{ $message }}
                    @enderror

                    <strong> Facebook :</strong>
                    <input type="text" name="fbook" value="{{ $teacher->fbook }}" class="form-control"> <br>
                    @error('fbook')
                        {{ $message }}
                    @enderror

                    <strong> Instagram :</strong>
                    <input type="text" name="insta" value="{{ $teacher->insta }}" class="form-control"> <br>
                    @error('insta')
                        {{ $message }}
                    @enderror

                    <strong> name :</strong>
                    <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"> <br>
                    @error('name')
                        {{ $message }}
                    @enderror

                    <strong> Job :</strong>
                    <input type="text" name="job" value="{{ $teacher->job }}" class="form-control"> <br>
                    @error('job')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
