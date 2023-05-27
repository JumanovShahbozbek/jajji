@extends('admin.layouts.layout')

@section('teachers')
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
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>image : </td>
                                            <td><b><img src="/images/{{ $teacher->image }}" width="100px"
                                                        alt=""></b></td>
                                        </tr>
                                        <tr>
                                            <td>Telegram : </td>
                                            <td><b>{{ $teacher->tgram }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook : </td>
                                            <td><b>{{ $teacher->fbook }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Instagram : </td>
                                            <td><b>{{ $teacher->insta }}</b></td>
                                        </tr>                                   
                                        <tr>
                                            <td>Name : </td>
                                            <td><b>{{ $teacher->name }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Subject : </td>
                                            <td><b>{{ $teacher->job }}</b></td>
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
