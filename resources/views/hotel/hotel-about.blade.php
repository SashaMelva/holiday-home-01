@extends('layouts.app')

@section('content')
    <section class="m-4">
        @include('inc.main-search-hotel')
    </section>
    <section class="container block-center">
        <h2 class="fs-2">{{ $hotel->full_title }}</h2>
        <p class="fw-bold mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                 viewBox="0 0 16 16">
                <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            {{ $hotel->city->title }} {{ $hotel->address }}
        </p>
        <p>Колличество номеров: {{ $hotel->number_rooms }}</p>
        <a class="h6 mb-0 z-index-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-bookmark" viewBox="0 0 16 16">
                <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
            </svg>
        </a>
    </section>

    <section class="container block-center row">
        <div class="col-xl-7 order-1">
            <h3>Об этом отеле</h3>
            <hr/>
            <div class="row g-2">
                @if(isset($hotel->img[0]->img_url))
                    <img class="rounded-4 col-md-6" src="{{ Storage::url($hotel->img[0]->img_url) }}"
                         alt="{{ $hotel->img[0]->description }}">
                    <div class="col-md-6">
                        <div class="row g-2">
                            <img class="rounded-4 col-12" src="{{ Storage::url($hotel->img[1]->img_url) }}"
                                 alt="{{ $hotel->img[1]->description }}">
                            <img class="rounded-4 col-md-6" src="{{ Storage::url($hotel->img[2]->img_url) }}"
                                 alt="{{ $hotel->img[2]->description }}">
                            <img class="rounded-4 col-md-6" src="{{ Storage::url($hotel->img[3]->img_url) }}"
                                 alt="{{ $hotel->img[0]->description }}">
                        </div>
                    </div>
                @endif
            </div>

            <h3>Удобства</h3>
            <hr/>
            <div class="card-body pt-4 p-0">
                @foreach($servicesList as $list)
                    <p>{{ $list->service->name }}</p>
                @endforeach
            </div>

            <h3>Варианты номеров</h3>
            <hr/>
            <div class="card-body pt-4 p-0">
                @include('room.room-list')
            </div>
            <h3>Отзывы клиентов</h3>
            <hr/>
            <p>Основные моменты</p>
            <div class="card-body pt-4 p-0">

            </div>
        </div>
        <aside class="col-xl-5 order-xl-2">
            <div data-margin-top="100">
                <div class="card card-body shadow p-3 m-tb-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
                        <div>
                            <span>Стартовая цена</span>
                            <h4 class="card-title mb-0">руб</h4>
                        </div>
                        <div class="fw-normal mb-0">
                            1 номер в сутки
                        </div>
                    </div>
                    <ul class="list-inline mb-2">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>

                            4,5
                            @for($i = 0; $i < $hotel->star; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            @endfor
                        </li>
                    </ul>
                    <p class="h6 fw-light mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                        Free breakfast available
                    </p>

                    <div class="d-grid">
                        <a>
                            Просмотреть все <?= count($rooms) ?> номеров
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    </section>
@endsection
