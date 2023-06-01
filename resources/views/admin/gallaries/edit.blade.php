@extends('admin.layouts.layout')

@section('gallaries')
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
                    <a class="create__btn" href="{{route('admin.gallaries.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{route('admin.gallaries.update', $gallary->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                                       
                    <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="image" value="{{ $gallary->image }}" class="form-control"> <br>
                    @error('image')
                        {{$message}}
                    @enderror

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection