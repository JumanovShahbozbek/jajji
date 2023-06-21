@extends('admin.layouts.layout')

@section('infos')
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
                            <a href="{{ route('admin.infos.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Info uz: </td>
                                            <td><b>{{ $info->title_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Info ru: </td>
                                            <td><b>{{ $info->title_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Info en: </td>
                                            <td><b>{{ $info->title_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Rasmi : </td>
                                            <td>
                                            <td><b><img src="/icon/{{ $info->icon }}" width="100" alt=""></b>
                                            </td>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Des uz: </p>
                                            </td>
                                            <td><b>{{ $info->description_uz }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Des ru: </p>
                                            </td>
                                            <td><b>{{ $info->description_ru }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Des en: </p>
                                            </td>
                                            <td><b>{{ $info->description_en }}</b></td>
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
