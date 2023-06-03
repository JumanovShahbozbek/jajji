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
                                        </tr>
                                        <tr>
                                            <td>Tumanlar:</td>
                                            <td><b>
                                                    @foreach ($region->districts as $region)
                                                        {{ $region->noun }} <br>
                                                    @endforeach
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mahalla:</td>
                                            <td><b>
                                                    @foreach ($region->streets as $region)
                                                        {{ $region->title }} <br>
                                                    @endforeach
                                                </b>
                                            </td>
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
