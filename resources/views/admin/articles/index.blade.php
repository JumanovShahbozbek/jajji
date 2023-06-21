@extends('admin.layouts.layout')

@section('articles')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>Teachers</h4>
                            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>img</th>
                                            <th>title uz</th>
                                            <th>title ru</th>
                                            <th>title en</th>
                                            <th>name</th>
                                            <th>content uz</th>
                                            <th>content ru</th>
                                            <th>content en</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($articles) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($articles as $article)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td><img src="/images/{{ $article->img }}" width="100px" alt="">
                                                </td>
                                                <td>{{ $article->title_uz }}</td>
                                                <td>{{ $article->title_ru }}</td>
                                                <td>{{ $article->title_en }}</td>
                                                <td>{{ $article->name }}</td>
                                                <td>{{ $article->content_uz }}</td>
                                                <td>{{ $article->content_ru }}</td>
                                                <td>{{ $article->content_en }}</td>

                                                <td>
                                                    <form action="{{ route('admin.articles.destroy', $article->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.articles.show', $article->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.articles.edit', $article->id) }}"
                                                            class="btn btn-primary">
                                                            <ion-icon class="far fa-edit"></ion-icon>
                                                        </a>
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                                            <ion-icon class="fas fa-times"></ion-icon>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
