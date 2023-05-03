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
                    <a class="create__btn" href="{{route('admin.groups.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{route('admin.groups.update', $group->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <strong> icon :</strong>
                    <input type="file" name="icon" value="{{ $group->icon }}" class="form-control"> <br>

                    <strong> title :</strong>
                    <input type="text" name="title" value="{{ $group->title }}" class="form-control"> <br>

                    <strong> Description :</strong>
                    <input type="text" name="content" value="{{ $group->content }}" class="form-control"> <br>

                    <strong> age :</strong>
                    <input type="text" name="age" value="{{ $group->age }}" class="form-control"> <br>

                    <strong> seat :</strong>
                    <input type="text" name="seat" value="{{ $group->seat }}" class="form-control"> <br>

                    <strong> time :</strong>
                    <input type="text" name="time" value="{{ $group->time }}" class="form-control"> <br>

                    <strong> payment :</strong>
                    <input type="text" name="payment" value="{{ $group->payment }}" class="form-control"> <br>

                   {{--  <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="icon" class="form-control"> <br> --}}

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection