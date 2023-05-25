@extends('admin.layouts.layout')

@section('regions')
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
                            <a href="{{ route('admin.regions.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Viloyat : </td>
                                            <td><b>{{ $region->name }}</b></td>
                                            <td>Tuman : </td>
                                            <td>{{ $region->noun ?? 'boglanmagan'}}</td>
                                            <td>Mahalla : </td>
                                            <td>{{ $region->title  ?? 'boglanmagan'}}</td>

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
