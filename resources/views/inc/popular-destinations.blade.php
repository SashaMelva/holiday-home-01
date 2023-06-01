<section class="row p-4 block-center container">
    <div class="container block-center">
        <h3 >Популярные города для туризма</h3>
    </div>
    <div class="row p-4 container-popular">
        <article class="card-city p-4 shadow rounded-3">
            <img src="{{ Vite::asset('resources/img/popular-city/Moskva.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Москва</h5>
                <p class="card-text">Столица России, в ней обязательно должен побывать каждый житель страны. Город, в
                    котором органично соседствуют древность и современность: широкие проспекты и тихие улочки центра,
                    небоскребы и старинные особняки. </p>
                <a href="{{ route('hotels.city.search', 1) }}" class="btn btn-primary">Просмотреть отели</a>
            </div>
        </article>
        <article class="card-city p-4 shadow rounded-3">
            <img src="{{ Vite::asset('resources/img/popular-city/Sankt-Peterburg.jpg') }}" class="card-img-top"
                 alt="...">
            <div class="card-body">
                <h5 class="card-title">Санкт-Петербург</h5>
                <p class="card-text"> Санкт-Петербург неповторим, гости влюбляются в этот город с первого взгляда и
                    возвращаются вновь и вновь, чтобы пройтись по его набережным, мостам и паркам, полюбоваться
                    дворцами, посетить многочисленные музеи, прокатиться по каналам и рекам. </p>
                <a href="{{ route('hotels.city.search', 2) }}" class="btn btn-primary">Просмотреть отели</a>
            </div>
        </article>
        <article class="card-city p-4 shadow rounded-3">
            <img src="{{ Vite::asset('resources/img/popular-city/Kazan.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Казань</h5>
                <p class="card-text">Столице Татарстана более тысячи лет, в настоящее время продолжается ее активное
                    развитие. Старинные здания постоянно ремонтируют и возводят новые. Город называют третьей столицей
                    России. </p>
                <a href="{{ route('hotels.city.search', 4) }}" class="btn btn-primary">Просмотреть отели</a>
            </div>
        </article>
    </div>
</section>
