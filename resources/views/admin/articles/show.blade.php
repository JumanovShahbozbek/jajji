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
                                            <td>Icon : </td>
                                            <td><b><img src="/icon/{{ $article->icon }}" width="100px" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>title : </p>
                                            </td>
                                            <td><b>{{ $article->title }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>name : </p>
                                            </td>
                                            <td><b>{{ $article->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>content : </p>
                                            </td>
                                            <td><b>{{ $article->content }}</b></td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
