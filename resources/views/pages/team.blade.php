@extends('layouts.main')
@section('team', 'active')
@section('content')

<!-- Header Start -->
<x-headr name1="Bizning o'qituvchilarimiz" name2="O'qituvchilar"></x-headr>
<!-- Header End -->


 <!-- Team Start -->
 <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
        </div>

        @include('section.teachers')

        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
            <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
        </div>

        @include('section.teachers')

        @include('section.teachers')

    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
    @include('section.test')
<!-- Testimonial End -->

@endsection