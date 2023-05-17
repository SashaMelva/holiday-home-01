<div class="container block-center">
    <form method="POST" action="{{ route('hotels.search')}}"
          class="d-flex form-search-position flex-row align-items-center shadow rounded-3 position-relative p-4 pb-5 pb-md-4 search-content">
        @csrf
        <div class="row g-4 align-items-center">
            <div class="col-lg-4 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi i-size-search fs-3 me-2 mt-2" viewBox="0 0 16 16">
                    <path
                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                <div class="flex-grow-1">
                    <label for="city">Город</label>
                    <input id="city" name="city" type="text" class="form-control" placeholder="Выберите город"
                           aria-label="City"
                           @if(isset($dataBooking['city']))value="{{ $dataBooking['city'] }}" @else value="Краснодар" @endif
                           required>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi i-size-search fs-3 me-2 mt-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                <div class="flex-grow-1">
                    <label for="arrival_date">Дата приезда</label>
                    <input name="arrival_date" id="arrival_date" type="date" class="form-control"
                           placeholder="Дата прибытия" @if(isset($dataBooking['arrival_date']))value="{{ $dataBooking['arrival_date'] }}"
                           @else value="{{ config('global.DATE_ARRIVAL') }}" @endif
                           min="{{ config('global.DATE_ARRIVAL') }}" max="2023-12-01" required>
                </div>
                <div class="flex-grow-1">
                    <label for="date_departure">выезда</label>
                    <input name="date_departure" id="date_departure" type="date" class="form-control"
                           placeholder="Дата вызда" @if(isset($dataBooking['date_departure']))value="{{ config('global.DATE_DEPARTURE') }}"
                           @else value="2023-05-17" @endif
                           min="{{ config('global.DATE_ARRIVAL') }}" max="2023-12-01" required>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi i-size-search fs-3 me-2 mt-2" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg>
                <div class="flex-grow-1">
                    <label for="count_adults">Количество взрослых</label>
                    <div class="dropdown guest-selector me-2">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-dash-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                    </svg>
                                </button>
                                <input id="count_adults" name="count_adults" type="text" class="form-control"
                                       @if(isset($dataBooking['count_adults']))value="{{ $dataBooking['count_adults'] }}" @else value="1"
                                       @endif
                                       readonly required>
                                <button type="button" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <label for="count_children">детей</label>
                    <div class="dropdown guest-selector me-2">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-dash-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                </svg>
                            </button>
                            <input id="count_children" name="count_children" type="text" class="form-control"
                                   @if(isset($dataBooking['count_children']))value="{{ $dataBooking['count_children'] }}" @else value="0"
                                   @endif
                                   readonly required>
                            <button type="button" class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-position-md-middle">
            <button class="search-btn btn-position-md-middle" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
