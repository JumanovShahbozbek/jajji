@extends('admin.layouts.layout')

@section('groups')
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
                            <a href="{{ route('admin.groups.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Rasm : </td>
                                            <td><b><img src="/images/{{ $group->image }}" width="100px" alt=""></b>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Info uz: </td>
                                            <td><b>{{ $group->title_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Info ru: </td>
                                            <td><b>{{ $group->title_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Info en: </td>
                                            <td><b>{{ $group->title_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Con uz: </p>
                                            </td>
                                            <td><b>{{ $group->content_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Con ru: </p>
                                            </td>
                                            <td><b>{{ $group->content_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Con en: </p>
                                            </td>
                                            <td><b>{{ $group->content_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Age : </td>
                                            <td><b>{{ $group->age }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Seat : </td>
                                            <td><b>{{ $group->seat }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Time : </td>
                                            <td><b>{{ $group->time }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Payment : </td>
                                            <td><b>{{ $group->payment }}</b></td>
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
