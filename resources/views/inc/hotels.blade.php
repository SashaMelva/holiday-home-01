<section class="container row g-4 container-list-hotel">
    @foreach($hotels as $hotel)
        <article class="card shadow p-2 pb-0 h-100">
            @if(count($hotel->img) > 0)
                <img src="{{ Storage::url($hotel->img[0]->img) }}" alt="{{ $hotel->img[0]->description }}">
            @else
                <img class="rounded-2" src="{{ Vite::asset('resources/img/city/luchshie2.jpg') }}" alt="hotel img">
            @endif
            <div class="card-body px-3 pb-0">
                <div class="d-flex justify-content-between mb-3">
                    <a class="badge bg-dark text-white">
                        @for($i = 0; $i < $hotel->star; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        @endfor
                        4.8
                    </a>
                    <a class="h6 mb-0 z-index-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        </svg>
                    </a>
                </div>
                <h5 class="card-title">
                    <a href="#">{{ $hotel->full_title }}</a>
                </h5>
                <ul class="nav mb-2 mb-sm-3">
                    @foreach($servicesList as $list)
                        @if(isset($list->hotel->id) && $list->hotel->id == $hotel->id)
                            <li class="nav-item nav-divider">
                                <div class="point"></div>
                                <p>{{ $list->service->name }}</p></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-footer pt-6">
                <div class="d-sm-flex justify-content-sm-between align-items-center">
                    <div class="d-flex align-items-center">
                        <h5 class="fw-normal text-success mb-0 me-1 prise">2000руб</h5>
                        <span class="mb-0 me-2">/день</span>
                    </div>
                    <div class="mt-2 mt-sm-0 z-index-2">
                        <form method="POST" action="{{ route('hotels.list.search', $hotel->id) }}"
                              class="btn btn-lg btn-primary btn-base mb-0">
                            @csrf
                            <input id="city" name="city" type="text"
                                   @if(isset($dataBooking['city'])) value="{{ $dataBooking['city'] }}"
                                   @else value="Краснодар" @endif
                                   hidden="hidden">
                            <input name="arrival_date" id="arrival_date" type="date"
                                   @if(isset($dataBooking['arrival_date'])) value="{{ $dataBooking['arrival_date'] }}"
                                   @else value="{{ config('global.DATE_ARRIVAL') }}" @endif
                                   hidden="hidden">
                            <input
                                name="date_departure" id="date_departure" type="date"
                                placeholder="Дата вызда"
                                @if(isset($dataBooking['date_departure'])) value="{{ config('global.DATE_DEPARTURE') }}"
                                @else value="2023-05-17" @endif hidden="hidden">
                            <input id="count_adults" name="count_adults" type="text"
                                   @if(isset($dataBooking['count_adults'])) value="{{ $dataBooking['count_adults'] }}"
                                   @else value="1"
                                   @endif
                                   hidden="hidden">
                            <input id="count_children" name="count_children" type="text"
                                   @if(isset($dataBooking['count_children'])) value="{{ $dataBooking['count_children'] }}"
                                   @else value="0"
                                   @endif
                                   hidden="hidden">
                            <button type="submit" class="btn-default">Детали</button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</section>
