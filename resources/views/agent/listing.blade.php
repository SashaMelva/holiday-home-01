@extends('layouts.agent')

@section('content')
    <section>
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-journals" viewBox="0 0 16 16">
                            <path
                                d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                            <path
                                d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                        </svg>
                        Объявления
                    </h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            <div class="row g-4">
                <div class="col-md-8 col-xl-6">
                    <div class="card card-body border p-4 h-100">
                        <h6>Информация об отеле</h6>
                        <div class="d-flex align-items-center">
                            @for($i = 0; $i < $hotel->star; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            @endfor
                        </div>
                        <h2 class="text">{{ $hotel->full_title }}</h2>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-geo-alt"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> {{ $hotel->city->title }} {{ $hotel->address }}</p>
                        <div class="mt-auto text-primary-hover"><a href="{{ route('agent.settings.hotel') }}" class="text-decoration-underline p-0 mb-0">Просмотреть</a>
                        </div>
                    </div>
                </div>
                <!-- Booked Rooms item -->
                <div class="col-md-5 col-xl-3">
                    <div class="card card-body border p-4 h-100">
                        <h6>Забронировано комнат</h6>
                        <h2 class="text-info">58</h2>
                        <p class="mb-2">Всего <span class="text-danger me-1">{{ $hotel->number_rooms }}</span> номера</p>
                        <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Просмотреть
                                бронирования</a></div>
                    </div>
                </div>

                <!-- Available Rooms item -->
                <div class="col-md-5 col-xl-3">
                    <div class="card card-body border p-4 h-100">
                        <h6>Доступные номера </h6>
                        <h2 class="text-warning">42</h2>
                        <p class="mb-2">Всего <span class="text-danger me-1">{{ $hotel->number_rooms }}</span> номера</p>
                        <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Просмотреть
                                номера</a></div>
                    </div>
                </div>

            </div>
            <!-- Counter END -->

            <!-- Listing table START -->
            <div class="row">
                <div class="col-12">

                    <div class="card border">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <div class="d-sm-flex align-items-center">
                                <h5 class="card-header-title">Ваши объявления номеров<span
                                        class="badge bg-primary bg-opacity-10 text-primary ms-2">@if(isset($rooms))
                                            {{ count($rooms) }}
                                        @else
                                            0
                                        @endif номеров</span></h5>

                                <a href="{{ route("lists.create") }}"
                                   class="btn btn-sm btn-primary-soft mb-0 ms-auto flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                    </svg>
                                    Добавить номер</a>
                            </div>
                        </div>

                        @foreach($rooms as $room)
                            <!-- Card body START -->
                            <div class="card-body vstack gap-3">
                                <!-- Listing item START -->
                                <div class="card border p-2">
                                    <div class="row g-4">
                                        <!-- Card img -->
                                        <div class="col-md-3 col-lg-2">
                                            <img
                                                src="@if(isset($room->img[0]->img_url)) {{ Storage::url($room->img[0]->img_url) }} @else {{ Vite::asset('resources/img/logo/img.png') }} @endif"
                                                class="card-img rounded-2"
                                                alt="Card image">
                                        </div>

                                        <!-- Card body -->
                                        <div class="col-md-9 col-lg-10">
                                            <div class="card-body position-relative d-flex flex-column p-0 h-100">
                                                <!-- Title -->
                                                <h5 class="card-title m-0 me-5"><a href="#">{{ $room->title }}</a></h5>

                                                <!-- Price and Button -->
                                                <div
                                                    class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                                    <div class="d-flex align-items-center">
                                                        <h5 class="fw-bold mb-0 me-1">{{ $room->price }} руб</h5>
                                                        <span class="mb-0 me-2">/день</span>
                                                    </div>


                                                    <!-- Price -->
                                                    <div class="hstack gap-2 mt-3 mt-sm-0">
                                                        <a href="{{  route("lists.edit",  $room->id) }}"
                                                           class="btn btn-sm btn-primary mb-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                 height="16" fill="currentColor"
                                                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd"
                                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                            </svg>
                                                            Редактировать</a>
                                                        <form method="POST" action="{{ route("lists.destroy",  $room->id)}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="btn btn-sm btn-danger mb-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                     height="16" fill="currentColor" class="bi bi-trash3"
                                                                     viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                                </svg>
                                                                Удалить
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listing item END -->
                            </div>
                            <!-- Card body END -->
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Listing table END -->
        </div>
    </section>
@endsection
