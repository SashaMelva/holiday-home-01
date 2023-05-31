@extends('layouts.admin')

@section('content')
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
                @else
                    <img class="rounded-4 col-md-6" src="{{ Vite::asset('resources/img/logo/img.png') }}">
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <h3>Удобства</h3>
                    <hr/>
                    <div class="card-body pt-4 p-0">
                        @foreach($servicesList as $list)
                            <p>{{ $list->service->name }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <h3>Менеджер отеля</h3>
                    <hr/>
                    <div class="card-body pt-4 p-0">
                        <p>Логин: {{ $userData->name }}</p>
                        <p>Почта: {{ $userData->email }}</p>
                    </div>
                </div>
            </div>
            <h3>Варианты номеров</h3>
            <hr/>
            <div class="card-body pt-4 p-0">
                @foreach($rooms as $room)
                    <article class="card shadow p-3 m-tb-1">
                        <div class="row g-4">
                            <div class="col-md-5">
                                    <?php $imgs = \App\Models\Room\RoomImg::where('room_id', $room->id)->get() ?>
                                @if(isset($imgs[0]->img_url))
                                    <div id="carouselExampleInterval{{ $room->id }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach($imgs as $img)
                                                <div class="carousel-item active" data-bs-interval="2000">
                                                    <img src=" {{ Storage::url($img->img_url) }}" class="d-block w-100 rounded-4"
                                                         alt="{{ $img->description }}">
                                                </div>
                                            @endforeach

                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleInterval{{$room->id}}"
                                                data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleInterval{{$room->id}}"
                                                data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                @else
                                    <img class="rounded-4 col-md-6" src="{{ Vite::asset('resources/img/logo/img.png') }}">
                                @endif
                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop{{ $room->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                    Просмотреть детали
                                </button>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100 p-0">
                                    <h5 class="card-title">{{ $room->title }}</h5>
                                    <p>Тип номера: {{ $room->category->name }}</p>
                                    <ul class="nav mb-2 mb-sm-3">
                                        @foreach($roomEquipmentLists as $equipmentList)
                                            @if(isset($equipmentList->room->id) && $equipmentList->room->id == $room->id)
                                                <li class="nav-item nav-divider">
                                                    <div class="point"></div>
                                                    <p>{{ $equipmentList->equipment->name }}</p></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="card-footer pt-6">
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-normal text-success mb-0 me-1 prise">{{ $room->price }}</h5>
                                                <span class="mb-0 me-2">/день</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{ $room->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                             aria-labelledby="staticBackdropLabel{{ $room->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content p-3">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel{{ $room->id }}">О номере</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="p-3">
                                            @if(isset($imgs[0]->img_url))
                                                <div id="carouselExampleInterval-modal{{$room->id}}" class="carousel slide"
                                                     data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @foreach($room->img as $img)
                                                            <div class="carousel-item active" data-bs-interval="2000">
                                                                <img src="{{ Storage::url($img->img_url) }}"
                                                                     class="d-block w-100 rounded-4"
                                                                     alt="{{ $img->description }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                            data-bs-target="#carouselExampleInterval-modal{{$room->id}}"
                                                            data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                            data-bs-target="#carouselExampleInterval-modal{{$room->id}}"
                                                            data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            @else
                                                <img class="rounded-4 col-md-6" src="{{ Vite::asset('resources/img/logo/img.png') }}">
                                            @endif
                                        </div>
                                        <div class="p-3">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $room->title }}</h1>
                                            <p>Площадь в квадратных метрах: {{ $room->area_square_meters }}</p>
                                            <p>Количество комнат: {{ $room->number_rooms }}</p>
                                            <p>Количество спальных мест: {{ $room->number_beds }}</p>
                                            <p>{{ $room->description }}</p>
                                        </div>
                                        <div class="p-3">
                                            <h5>Удобства</h5>
                                            <div>
                                                <ul class="list-group list-group-borderless mt-2 mb-0">
                                                    @foreach($roomEquipmentLists as $equipmentList)
                                                        @if(isset($equipmentList->room->id) && $equipmentList->room->id == $room->id)
                                                            <li class="list-group-item d-flex mb-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                                </svg>
                                                                <span class="h6 fw-light mb-0">{{ $equipmentList->equipment->name }}</span>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>
                @endforeach
            </div>
        </div>
        <aside class="col-xl-5 order-xl-2">
            <div data-margin-top="100">
                <div class="card card-body shadow p-3 m-tb-1">
                    <p>Работ с отелем</p>
                    <form method="POST" class="row" action="{{ route('status.hotel.save', $hotel->id) }}">
                        @csrf
                        <label for="status_id">Изменить статус</label>
                            <select  class="form-control-lg base-input" id="status_id" name="status_id">
                                @foreach($statuses as $status)
                                <option value="{{ $status->id }}" @if($hotel->status->title == $status->title) selected @endif>{{ $status->title }}</option>
                                @endforeach
                            </select>
                        <button type="submit"  class="btn btn-primary m-tb-1" >Сохранить</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </form>
                    <a href="{{ route('admin.hotels') }}">Назад</a>
                </div>
            </div>
        </aside>
    </section>
@endsection
