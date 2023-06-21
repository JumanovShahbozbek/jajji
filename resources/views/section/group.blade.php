<div class="row">
    @foreach ($groups as $group)
        <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
                <img class="card-img-top mb-2" src="images/{{ $group->image }}" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title">{{ $group['title_'.\App::getLocole()] }}</h4>
                    <p class="card-text">{{ $group['content_'.\App::getLocale()] }}</p>
                </div>
                <div class="card-footer bg-transparent py-4 px-5">
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right"><strong>Bolalar yoshi</strong></div>
                        <div class="col-6 py-1">{{ $group->age }} yosh</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right"><strong>Jami o'rindiqlar</strong></div>
                        <div class="col-6 py-1">{{ $group->seat }} o'rindiq</div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-6 py-1 text-right border-right"><strong>Dars vaqti</strong></div>
                        <div class="col-6 py-1">{{ $group->time }}</div>
                    </div>
                    <div class="row">
                        <div class="col-6 py-1 text-right border-right"><strong>Oylik to'lov</strong></div>
                        <div class="col-6 py-1">{{ $group->payment }} / Oy</div>
                    </div>
                </div>
                <a href="tel:+998996111300" class="btn btn-primary px-4 mx-auto mb-4">Hoziroq qo'shil</a>
            </div>
        </div>
    @endforeach
</div>
