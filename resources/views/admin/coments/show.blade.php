@extends('admin.layouts.layout')

@section('coments')
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
                            <a href="{{ route('admin.coments.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Icon : </td>
                                            <td><b><img src="/icon/{{ $coment->icon }}" width="100px" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Content : </p>
                                            </td>
                                            <td><b>{{ $coment->content }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Photo : </p>
                                            </td>
                                            <td><b><img src="/images/{{ $coment->img }}" width="100px" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Surname : </p>
                                            </td>
                                            <td><b>{{ $coment->surname }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Name : </p>
                                            </td>
                                            <td><b>{{ $coment->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Job : </p>
                                            </td>
                                            <td><b>{{ $coment->job }}</b></td>
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
