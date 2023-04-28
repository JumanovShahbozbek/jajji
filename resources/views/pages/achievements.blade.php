@extends('layouts.main')
@section('achievements', 'active')
@section('content')

<!-- Header Start -->
  <x-headr name1="Bizni yutuqlarimiz" name2="Yutuqlar" ></x-headr>
<!-- Header End -->


<!-- Wins Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">BOG'CHA HAYOTI</span></p>
            <h1 class="mb-4">So'nggi Yutuqlar</h1>
        </div>
        <div class="row pb-3">

            @include('section.blog')
            
            @include('section.blog')
            
            <div class="col-md-12 mb-4">
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Wins End -->

@endsection