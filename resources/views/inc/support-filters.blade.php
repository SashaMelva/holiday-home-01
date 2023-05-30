<div id="support-filters-content" class="card card-body p-4 mt-4 z-index-9 bg-light-card rounded-3" style="display : none">
    <form method="POST" action="{{ route('hotels.search.support') }}" class="row g-4">
        @csrf
        <div class="col-md-6 col-lg-4">
            <div class="form-control-borderless">
                <label for="title" class="form-label">Название отеля</label>
                <input id="title" name="title" class="form-control-lg base-input" type="text" value="@if(isset($dataFilter)) {{ $dataFilter['title'] }} @endif">
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-control-borderless">
                <label class="form-label">Цена</label>
                <div class="rang-template">
                    <div class="d-flex justify-content-between">
                        <input class="text-body input-with-range-min" type="text" value="0" readonly>
                        <input class="text-body input-with-range-min rang-max" type="text" value="100000" readonly>
                    </div>
                    <div class="d-flex justify-content-around">
                            <input type="range" class="form-range" id="customRange1">
                            <input type="range" class="form-range" id="customRange1">
                    </div>
                    {{--                        <div class="noUi-origin" style="transform: translate(-866.667%); z-index: 5;">--}}
                    {{--                            <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider"--}}
                    {{--                                 aria-orientation="horizontal" aria-valuemin="500.0" aria-valuemax="1500.0"--}}
                    {{--                                 aria-valuenow="700.0" aria-valuetext="700.00">--}}
                    {{--                                <div class="noUi-touch-area"></div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="noUi-origin" style="transform: translate(-333.333%); z-index: 4;">--}}
                    {{--                            <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider"--}}
                    {{--                                 aria-orientation="horizontal" aria-valuemin="700.0" aria-valuemax="2000.0"--}}
                    {{--                                 aria-valuenow="1500.0" aria-valuetext="1500.00">--}}
                    {{--                                <div class="noUi-touch-area"></div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-size-lg form-control-borderless">
                <label for="sort" class="form-label">Фильтрция по популярности</label>
                <select id="sort" name="sort" class="form-control-lg base-input" type="text">
                    <option value="popular">Самые популярные</option>
                    <option value="max_price">Сначала дорогие</option>
                    <option value="min_price">Сначала дешёвые</option>
{{--                    <option value="">Больше всего отзывов</option>--}}
                </select>
            </div>
        </div>
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <label class="form-label">Рейтинг клиентов</label>--}}
{{--            <ul class="list-inline mb-0 g-3">--}}
{{--                <li class="list-inline-item">--}}
{{--                    <input id="rating-3" class="btn-check" type="checkbox">--}}
{{--                    <label for="rating-3" class="btn btn-white btn-primary-soft-check">3+</label>--}}
{{--                </li>--}}
{{--                <li class="list-inline-item">--}}
{{--                    <input id="rating-3-5" class="btn-check" type="checkbox">--}}
{{--                    <label for="rating-3-5" class="btn btn-white btn-primary-soft-check">3.5+</label>--}}
{{--                </li>--}}
{{--                <li class="list-inline-item">--}}
{{--                    <input id="rating-4" class="btn-check" type="checkbox">--}}
{{--                    <label for="rating-4" class="btn btn-white btn-primary-soft-check">4+</label>--}}
{{--                </li>--}}
{{--                <li class="list-inline-item">--}}
{{--                    <input id="rating-5" class="btn-check" type="checkbox">--}}
{{--                    <label for="rating-5" class="btn btn-white btn-primary-soft-check">4.5+</label>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class="col-md-6 col-lg-4">
            <label class="form-label">Рейтинг звёзд</label>
            <ul class="list-inline mb-0 g-3">
                <li class="list-inline-item">
                    <input id="star-1" name="star" value="1" class="btn-check" @if(isset($dataFilter) && !is_null($dataFilter->star) && $dataFilter->star == "1") checked @endif type="radio">
                    <label for="star-1" class="btn btn-white btn-primary-soft-check">1
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </label>
                </li>
                <li class="list-inline-item">
                    <input id="star-2" name="star" value="2" class="btn-check" type="radio" @if(isset($dataFilter) && !is_null($dataFilter->star) && $dataFilter->star == "2") checked @endif>
                    <label for="star-2" class="btn btn-white btn-primary-soft-check">2
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </label>
                </li>
                <li class="list-inline-item">
                    <input id="star-3" name="star" value="3" class="btn-check" type="radio" @if(isset($dataFilter) && !is_null($dataFilter->star) && $dataFilter->star == "3") checked @endif>
                    <label for="star-3" class="btn btn-white btn-primary-soft-check">3
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </label>
                </li>
                <li class="list-inline-item">
                    <input id="star-4" name="star" value="4" class="btn-check" type="radio" @if(isset($dataFilter) && !is_null($dataFilter->star) && $dataFilter->star == "4") checked @endif>
                    <label for="star-4" class="btn btn-white btn-primary-soft-check">4
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </label>
                </li>
                <li class="list-inline-item">
                    <input id="star-5" name="star" value="5" class="btn-check" type="radio" @if(isset($dataFilter) && !is_null($dataFilter->star) && $dataFilter->star == "5") checked @endif>
                    <label for="star-5" class="btn btn-white btn-primary-soft-check">5
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </label>
                </li>
            </ul>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-size-lg form-control-borderless">
                <label for="category" class="form-label">Тип отеля</label>
                <select id="category" name="category" class="form-control-lg base-input" type="text">
                    @foreach($categories as $category)
                    <option @if(isset($dataFilter) && $dataFilter->category == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
{{--        <div class="col-12">--}}
{{--            <label class="form-label">Удобства</label>--}}
{{--            <div>--}}
{{--                @foreach($services as $service)--}}
{{--                    <input type="checkbox" id="service-{{ $service->id }}" name="service-{{ $service->id }}">--}}
{{--                    <label for="service-{{ $service->id }}">{{ $service->name }}</label>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="text-end align-items-center">
            <a href="{{ route('hotels.search.support.disable') }}" type="button" class="btn btn-lg btn-link custom-lik p-0 mb-0">Сброс</a>
            <button type="submit" class="btn btn-lg btn-primary btn-base">Применить</button>
        </div>
    </form>
</div>
