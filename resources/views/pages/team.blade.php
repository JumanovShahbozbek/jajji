@extends('layouts.main')
@section('team', 'active')
@section('content')

    <!-- Header Start -->
    <x-headr name1=" {{ __ ('staticinfo.teachers')}}" name2="{{ __ ('navbar.teachers')}}"></x-headr>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2"> @lang('staticinfo.leadership') </span></p>
            </div>

            <div class="row">
                @foreach ($teachers as $teacher)
                    @if ($teacher->status == 0)
                        @include('section.teachers')
                    @endif
                @endforeach
            </div>

            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2"> @lang('staticinfo.teachers') </span></p>
                <h1 class="mb-4"> @lang('staticinfo.tinfo') </h1>
            </div>

            <div class="row">
                @foreach ($teachers1 as $teacher)
                    @if ($teacher->status == 1)
                        @include('section.teachers')
                    @endif
                @endforeach
            </div>

        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('section.test')
    <!-- Testimonial End -->

@endsection
