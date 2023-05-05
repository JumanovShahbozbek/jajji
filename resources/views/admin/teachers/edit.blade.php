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
                    <strong> icon :</strong>
                    <input type="file" name="icon" value="{{ $teacher->icon }}" class="form-control"> <br>
                    @error('icon')
                        {{ $message }}
                    @enderror

                    <strong> title :</strong>
                    <input type="text" name="tgram" value="{{ $teacher->tgram }}" class="form-control"> <br>
                    @error('tgram')
                        {{ $message }}
                    @enderror

                    <strong> Description :</strong>
                    <input type="text" name="fbook" value="{{ $teacher->fbook }}" class="form-control"> <br>
                    @error('fbook')
                        {{ $message }}
                    @enderror

                    <strong> age :</strong>
                    <input type="text" name="insta" value="{{ $teacher->insta }}" class="form-control"> <br>
                    @error('insta')
                        {{ $message }}
                    @enderror

                    <strong> seat :</strong>
                    <input type="text" name="surname" value="{{ $teacher->surname }}" class="form-control"> <br>
                    @error('surname')
                        {{ $message }}
                    @enderror

                    <strong> time :</strong>
                    <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"> <br>
                    @error('name')
                        {{ $message }}
                    @enderror

                    <strong> payment :</strong>
                    <input type="text" name="subject" value="{{ $teacher->subject }}" class="form-control"> <br>
                    @error('payment')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
