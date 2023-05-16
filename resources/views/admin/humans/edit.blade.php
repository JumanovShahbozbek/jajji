@extends('admin.layouts.layout')

@section('humans')
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
                    <a class="create__btn" href="{{ route('admin.humans.index') }}"> <i
                            class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

                <form class="create__inputs" action="{{ route('admin.humans.update', $human->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <strong> title :</strong>
                    <input type="text" name="name" value="{{ $human->name }}" class="form-control"> <br>
                    @error('name')
                        {{ $message }}
                    @enderror

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                        <div class="col-sm-12 col-md-7">
                          <select name="number_id" class="form-control" id="">
                            <option value="{{ $human->number->id }}"> {{$human->number->name}} </option>
                            @foreach ($numbers as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary" value="Ozgartirish">Submit</button>
                        </div>
                      </div>

                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
