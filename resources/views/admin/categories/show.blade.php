@extends('admin.layouts.layout')

@section('categories')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Category uz: </td>
                                            <td><b>{{ $category->name_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Category ru: </td>
                                            <td><b>{{ $category->name_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Category en: </td>
                                            <td><b>{{ $category->name_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Postlar:</td>
                                            <td><b>
                                                @foreach ($category->posts as $category)                                 
                                                    {{ $category->title }} <br>
                                                @endforeach</b>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
