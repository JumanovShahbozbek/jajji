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
    <!-- MAIN -->
    <main>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>O'zgartirish</h3>
                    <a class="create__btn" href="{{ route('admin.groups.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{ route('admin.groups.update', $group->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <strong> Rasm :</strong>
                    <input type="file" name="image" value="{{ $group->icon }}" class="form-control"> <br>
                    @error('image')
                        {{ $message }}
                    @enderror

                    <strong> title uz:</strong>
                    <input type="text" name="title_uz" value="{{ $group->title_uz }}" class="form-control"> <br>
                    @error('title_uz')
                        {{ $message }}
                    @enderror

                    <strong> title ru:</strong>
                    <input type="text" name="title_ru" value="{{ $group->title_ru }}" class="form-control"> <br>
                    @error('title_ru')
                        {{ $message }}
                    @enderror

                    <strong> title en:</strong>
                    <input type="text" name="title_en" value="{{ $group->title_en }}" class="form-control"> <br>
                    @error('title_en')
                        {{ $message }}
                    @enderror

                    <strong> Description uz:</strong>
                    <input type="text" name="content_uz" value="{{ $group->content_uz }}" class="form-control"> <br>
                    @error('content_uz')
                        {{ $message }}
                    @enderror

                    <strong> Description ru:</strong>
                    <input type="text" name="content_ru" value="{{ $group->content_ru }}" class="form-control"> <br>
                    @error('content_ru')
                        {{ $message }}
                    @enderror

                    <strong> Description en:</strong>
                    <input type="text" name="content_en" value="{{ $group->content_en }}" class="form-control"> <br>
                    @error('content_en')
                        {{ $message }}
                    @enderror

                    <strong> age :</strong>
                    <input type="text" name="age" value="{{ $group->age }}" class="form-control"> <br>
                    @error('age')
                        {{ $message }}
                    @enderror

                    <strong> seat :</strong>
                    <input type="text" name="seat" value="{{ $group->seat }}" class="form-control"> <br>
                    @error('seat')
                        {{ $message }}
                    @enderror

                    <strong> time :</strong>
                    <input type="text" name="time" value="{{ $group->time }}" class="form-control"> <br>
                    @error('time')
                        {{ $message }}
                    @enderror

                    <strong> payment :</strong>
                    <input type="text" name="payment" value="{{ $group->payment }}" class="form-control"> <br>
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
