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
                                            <td>Icon : </td>
                                            <td><b>{{ $group->icon }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Info : </td>
                                            <td><b>{{ $group->title }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Con : </p>
                                            </td>
                                            <td><b>{{ $group->content }}</b></td>
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

                                       {{--  <tr>
                                            <td>Rasmi : </td>
                                            <td>
                                                <img alt="image" src="/images/{{ $info->description }}" width="59">
                                            </td>
                                        </tr> --}}



                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
