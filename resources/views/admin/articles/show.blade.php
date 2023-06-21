@extends('admin.layouts.layout')

@section('articles')
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
                            <a href="{{ route('admin.articles.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Image : </td>
                                            <td><b><img src="/images/{{ $article->img }}" width="100px" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>title uz: </p>
                                            </td>
                                            <td><b>{{ $article->title_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>title ru: </p>
                                            </td>
                                            <td><b>{{ $article->title_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>title en: </p>
                                            </td>
                                            <td><b>{{ $article->title_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>name : </p>
                                            </td>
                                            <td><b>{{ $article->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>content uz: </p>
                                            </td>
                                            <td><b>{{ $article->content_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>content ru: </p>
                                            </td>
                                            <td><b>{{ $article->content_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>content en: </p>
                                            </td>
                                            <td><b>{{ $article->content_en }}</b></td>
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
