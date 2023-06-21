@extends('layouts.main')
@section('gallery', 'active')
@section('content')

 <!-- Header Start -->
    <x-headr name1="{{ __ ('navbar.gallery')}}" name2="{{ __ ('navbar.gallery')}}" ></x-headr>
<!-- Header End -->

<!-- Gallery Start -->
    @include('section.gallery')
<!-- Gallery End -->

@endsection