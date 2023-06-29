<div class="container-fluid py-5">
    <div class="container p-0">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2"> @lang('staticinfo.gratitude') </span></p>
            <h1 class="mb-4"> @lang('staticinfo.grinfo') </h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($coments as $coment)
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        {{ $coment['content_'.\App::getLocale()] }}
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="images/{{ $coment->img }}" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5> {{ $coment->surname }} {{ $coment->name }} </h5>
                            <i> {{ $coment['job_'.\App::getLocale()] }} </i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
