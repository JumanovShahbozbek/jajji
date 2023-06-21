@extends('admin.layouts.layout')

@section('infos')
    active
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header"><strong>Infos</strong></div>

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

        <div class="card-header nav justify-content-center">
            <a href="{{ route('admin.infos.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
        </div><br>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>title uz</th>
                            <th>title ru</th>
                            <th>title en</th>
                            <th>icon</th>
                            <th>description uz</th>
                            <th>description ru</th>
                            <th>description en</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($infos) == 0)
                            <tr>
                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot
                                    qo'shilmagan
                                </td>
                            </tr>
                        @endif

                        @foreach ($infos as $info)
                            <tr>
                                <td>
                                    {{ ++$loop->index }}
                                </td>
                                <td>{{ $info->title_uz }}</td>
                                <td>{{ $info->title_ru }}</td>
                                <td>{{ $info->title_en }}</td>
                                <td><img src="/icon/{{ $info->icon }}" alt="" width="70px"></td>
                                <td>{{ $info->description_uz }}</td>
                                <td>{{ $info->description_ru }}</td>
                                <td>{{ $info->description_en }}</td>

                                <td>
                                    <form action="{{ route('admin.infos.destroy', $info->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.infos.show', $info->id) }}" class="btn btn-info">
                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                        </a>
                                        <a href="{{ route('admin.infos.edit', $info->id) }}" class="btn btn-primary">
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
                {{-- {{ $infos->links() }} --}}
            </div>
        </div>

    </div>
@endsection
