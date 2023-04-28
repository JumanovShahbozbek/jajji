@extends('layouts.main')
@section('gallery', 'active')
@section('content')

 <!-- Header Start -->
    <x-headr name1="Galereya" name2="Galereya" ></x-headr>
<!-- Header End -->

<!-- Gallery Start -->
    @include('section.gallery')
<!-- Gallery End -->

@endsection