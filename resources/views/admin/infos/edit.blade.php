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
                    
                    <strong> title uz:</strong>
                    <input type="text" name="title_uz" value="{{ $info->title_uz }}" class="form-control"> <br>
                    @error('title_uz')
                        {{$message}}
                    @enderror
                    <strong> title ru:</strong>
                    <input type="text" name="title_ru" value="{{ $info->title_ru }}" class="form-control"> <br>
                    @error('title_ru')
                        {{$message}}
                    @enderror
                    <strong> title en:</strong>
                    <input type="text" name="title_en" value="{{ $info->title_en }}" class="form-control"> <br>
                    @error('title_en')
                        {{$message}}
                    @enderror

                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="icon" value="{{ $info->icon }}" class="form-control"> <br>
                    @error('icon')
                        {{$message}}
                    @enderror

                    <strong> Description uz:</strong>
                    {{-- <textarea class="ckeditor form-control" name="description" value="{{ $info->description }}"></textarea> --}}
                    <input type="text" name="description_uz" value="{{ $info->description_uz }}" class="form-control"> <br>
                    @error('description_uz')
                        {{$message}}
                    @enderror
                    <strong> Description ru:</strong>
                    {{-- <textarea class="ckeditor form-control" name="description" value="{{ $info->description }}"></textarea> --}}
                    <input type="text" name="description_ru" value="{{ $info->description_ru }}" class="form-control"> <br>
                    @error('description_ru')
                        {{$message}}
                    @enderror
                    <strong> Description en:</strong>
                    {{-- <textarea class="ckeditor form-control" name="description" value="{{ $info->description }}"></textarea> --}}
                    <input type="text" name="description_en" value="{{ $info->description_en }}" class="form-control"> <br>
                    @error('description_en')
                        {{$message}}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection