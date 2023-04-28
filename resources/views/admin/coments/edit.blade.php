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
                    <a class="create__btn" href="{{route('admin.coments.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{route('admin.coments.update', $coment->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <strong> Icon :</strong>
                    <input type="text" name="icon" value="{{ $coment->icon }}" class="form-control"> <br>

                    <strong> Content :</strong>
                    <input type="text" name="content" value="{{ $coment->content }}" class="form-control"> <br>

                    
                    <strong> Photo :</strong>
                    <input type="text" name="img" value="{{ $coment->img }}" class="form-control"> <br>

                    
                    <strong> Surname :</strong>
                    <input type="text" name="surname" value="{{ $coment->surname }}" class="form-control"> <br>

                    
                    <strong> Name :</strong>
                    <input type="text" name="name" value="{{ $coment->name }}" class="form-control"> <br>

                    
                    <strong> Job :</strong>
                    <input type="text" name="subject" value="{{ $coment->subject }}" class="form-control"> <br>

                    {{-- <strong> Rasm(png yoki jpg) :</strong>
                    <input type="file" name="icon" class="form-control"> <br> --}}

                    <input type="submit" value="O'zgartirish">

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection