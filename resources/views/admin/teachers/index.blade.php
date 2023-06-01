@extends('admin.layouts.layout')

@section('teachers')
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
                                <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary"
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
                                            <th>image</th>
                                            <th>telegram</th>
                                            <th>facebook</th>
                                            <th>instagram</th>
                                            <th>name</th>
                                            <th>subject</th>
                                            <th>Darajasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($teachers) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td><img src="/images/{{ $teacher->image }}" width="100px" alt="">
                                                </td>
                                                <td>{{ $teacher->tgram }}</td>
                                                <td>{{ $teacher->fbook }}</td>
                                                <td>{{ $teacher->insta }}</td>
                                                <td>{{ $teacher->name }}</td>
                                                <td>{{ $teacher->job }}</td>
                                                <td>{{ $teacher->status }}</td>
                                                <td><br><br>

                                                    <form action="{{ route('admin.teachers.destroy', $teacher->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.teachers.show', $teacher->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.teachers.edit', $teacher->id) }}"
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
                               {{--  {{ $teachers->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
