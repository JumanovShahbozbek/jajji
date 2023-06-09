@extends('admin.layouts.layout')

@section('coments')
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
                            <h4>Coments</h4>
                            <a href="{{ route('admin.coments.create') }}" class="btn btn-primary"
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
                                            <th>icon</th>
                                            <th>content uz</th>
                                            <th>content ru</th>
                                            <th>content en</th>
                                            <th>image</th>
                                            <th>surname</th>
                                            <th>name</th>
                                            <th>job uz</th>
                                            <th>job ru</th>
                                            <th>job en</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($coments) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($coments as $coment)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td><img src="/icon/{{ $coment->icon }}" width="100px" alt=""></td>

                                                <td>{{ $coment->content_uz }}</td>
                                                <td>{{ $coment->content_ru }}</td>
                                                <td>{{ $coment->content_en }}</td>

                                                <td><img src="/images/{{ $coment->img }}" width="100px" alt="">
                                                </td>
                                                <td>{{ $coment->surname }}</td>
                                                <td>{{ $coment->name }}</td>

                                                <td>{{ $coment->job_uz }}</td>
                                                <td>{{ $coment->job_ru }}</td>
                                                <td>{{ $coment->job_en }}</td>

                                                <td>
                                                    <form action="{{ route('admin.coments.destroy', $coment->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.coments.show', $coment->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.coments.edit', $coment->id) }}"
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
                                {{ $coments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
