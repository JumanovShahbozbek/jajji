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

                    <strong> title :</strong>
                    <input type="text" name="title" value="{{ $group->title }}" class="form-control"> <br>
                    @error('title')
                        {{ $message }}
                    @enderror

                    <strong> Description :</strong>
                    <input type="text" name="content" value="{{ $group->content }}" class="form-control"> <br>
                    @error('content')
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
