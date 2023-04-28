@extends('layouts.main')
@section('group', 'active')
@section('content')

    <!-- Header Start -->
    <x-headr name1="Bizning sinflarimiz" name2="Sinflar"></x-headr>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Ommabop darslar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun darslar</h1>
            </div>
            @include('section.group')
            @include('section.group')
        </div>
    </div>
    <!-- Class End -->

    Ommabop darslar
    <!-- Registration Start -->
        @include('section.registr')
    <!-- Registration End -->



@endsection