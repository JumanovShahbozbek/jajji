<div class="row">
    @foreach ($teachers as $teacher)
    <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
            <img class="img-fluid w-100" src="images/{{ $teacher->image }}" alt="">
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-telegram"></i></a>
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <h4>{{ $teacher->name }}</h4>
        <i>{{ $teacher->job }}</i>
    </div>
    @endforeach

    {{-- <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
            <img class="img-fluid w-100" src="/assets/img/team-2.jpg" alt="" >
            <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-telegram"></i></a>
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <h4>Bahromov Dilmurod</h4>
        <i>Til o'qituvchisi</i>
    </div>
    <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
            <img class="img-fluid w-100" src="/assets/img/team-3.jpg" alt="" >
            <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-telegram"></i></a>
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <h4>Milloboyeva Mahfuza</h4>
        <i>Raqs o'qituvchisi</i>
    </div>
    <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
            <img class="img-fluid w-100" src="/assets/img/team-4.jpg" alt="" >
            <div
                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-telegram"></i></a>
                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                    href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <h4>Dadaxanov Gurbittin</h4>
        <i>San'at o'qituvchisi</i>
    </div> --}}
</div>
