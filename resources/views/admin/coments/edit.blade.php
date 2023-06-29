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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>O'zgartirish</h3>
                    <a class="create__btn" href="{{ route('admin.coments.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{ route('admin.coments.update', $coment->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <strong> Icon :</strong>
                    <input type="file" name="icon" value="{{ $coment->icon }}" class="form-control"> <br>
                    @error('icon')
                        {{ $message }}
                    @enderror


                    <strong> Content uz:</strong>
                    <input type="text" name="content_uz" value="{{ $coment->content_uz }}" class="form-control"> <br>
                    @error('content_uz')
                        {{ $message }}
                    @enderror

                    <strong> Content ru:</strong>
                    <input type="text" name="content_ru" value="{{ $coment->content_ru }}" class="form-control"> <br>
                    @error('content_ru')
                        {{ $message }}
                    @enderror

                    <strong> Content en:</strong>
                    <input type="text" name="content_en" value="{{ $coment->content_en }}" class="form-control"> <br>
                    @error('content_en')
                        {{ $message }}
                    @enderror


                    <strong> Photo :</strong>
                    <input type="file" name="img" value="{{ $coment->img }}" class="form-control"> <br>
                    @error('img')
                        {{ $message }}
                    @enderror


                    <strong> Surname :</strong>
                    <input type="text" name="surname" value="{{ $coment->surname }}" class="form-control"> <br>
                    @error('surname')
                        {{ $message }}
                    @enderror


                    <strong> Name :</strong>
                    <input type="text" name="name" value="{{ $coment->name }}" class="form-control"> <br>
                    @error('name')
                        {{ $message }}
                    @enderror


                    <strong> Job uz:</strong>
                    <input type="text" name="job_uz" value="{{ $coment->job_uz }}" class="form-control"> <br>
                    @error('job_uz')
                        {{ $message }}
                    @enderror

                    <strong> Job ru:</strong>
                    <input type="text" name="job_ru" value="{{ $coment->job_ru }}" class="form-control"> <br>
                    @error('job_ru')
                        {{ $message }}
                    @enderror

                    <strong> Job en:</strong>
                    <input type="text" name="job_en" value="{{ $coment->job_en }}" class="form-control"> <br>
                    @error('job_en')
                        {{ $message }}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
