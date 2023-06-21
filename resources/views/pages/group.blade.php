@extends('layouts.main')
@section('group', 'active')
@section('content')

    <!-- Header Start -->
    
    <x-headr name1=" {{ __ ('staticinfo.groups') }}  " name2="{{ __ ('navbar.groups') }}"></x-headr>
    <!-- Header End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2"> @lang('staticinfo.lessons') </span></p>
                <h1 class="mb-4"> @lang('staticinfo.lesinfo') </h1>
            </div>

            @include('section.group')

        </div>
    </div>
    <!-- Class End -->

    <!-- Registration Start -->
    @include('section.registr')
    <!-- Registration End -->



@endsection
