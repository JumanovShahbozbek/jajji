@extends('admin.layouts.layout')

@section('infos')
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
                    <a class="create__btn" href="{{route('admin.infos.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{route('admin.infos.update', $info->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <strong> title :</strong>
                    <input type="text" name="title" value="{{ $info->title }}" class="form-control"> <br>
                    @error('title')
                        {{$message}}
                    @enderror

                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="icon" value="{{ $info->icon }}" class="form-control"> <br>
                    @error('icon')
                        {{$message}}
                    @enderror

                    <strong> Description :</strong>
                    <input type="text" name="description" value="{{ $info->description }}" class="form-control"> <br>
                    @error('description')
                        {{$message}}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection