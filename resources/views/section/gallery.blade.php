<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Bizning galereyamiz</span></p>
            <h1 class="mb-4">Bizning bolajonlarimiz</h1>
        </div>
        <!-- <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-primary m-1 active"  data-filter="*">Hammasi</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".first">O'yingohda</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".second">Chizish</li>
                    <li class="btn btn-outline-primary m-1" data-filter=".third">O'qish</li>
                </ul>
            </div>
        </div> -->

        <div class="row portfolio-container">

            @foreach ($gallaries as $gallary)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item ">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="images/{{ $gallary->image }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="images/{{ $gallary->image }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <iframe width="350" height="250" src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <iframe width="350" height="250" src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <iframe width="350" height="250" src="https://www.youtube.com/embed/Lm6GCkTl2V0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
