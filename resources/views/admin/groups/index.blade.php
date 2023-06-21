@extends('admin.layouts.layout')

@section('groups')
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
                            <h4>Groups</h4>

                            @if (count($groups) < 6)
                                <a href="{{ route('admin.groups.create') }}" class="btn btn-primary"
                                    style="position:absolute; right:50;">Create</a>
                            @else
                                <div class="card-header nav justify-content-center">
                                    <p> Boshqa malumot kiritib bolmaydi</p>
                                </div>
                            @endif

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
                                            <th>title uz</th>
                                            <th>title ru</th>
                                            <th>title en</th>
                                            <th>content uz</th>
                                            <th>content ru</th>
                                            <th>content en</th>
                                            <th>age</th>
                                            <th>seat</th>
                                            <th>time</th>
                                            <th>payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($groups) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($groups as $group)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td><img src="/images/{{ $group->image }}" width="100px" alt="">
                                                </td>
                                                <td>{{ $group->title_uz }}</td>
                                                <td>{{ $group->title_ru }}</td>
                                                <td>{{ $group->title_en }}</td>
                                                <td>{{ $group->content_uz }}</td>
                                                <td>{{ $group->content_ru }}</td>
                                                <td>{{ $group->content_en }}</td>
                                                <td>{{ $group->age }}</td>
                                                <td>{{ $group->seat }}</td>
                                                <td>{{ $group->time }}</td>
                                                <td>{{ $group->payment }}</td>

                                                <td>
                                                    <form action="{{ route('admin.groups.destroy', $group->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.groups.show', $group->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.groups.edit', $group->id) }}"
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
                                {{ $groups->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
