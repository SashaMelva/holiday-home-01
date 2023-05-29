@extends('layouts.admin')

@section('content')
    <nav class="navbar top-bar navbar-light py-0 py-xl-3">
        <div class="container-fluid p-0">
            <div class="d-flex align-items-center w-100">
                <!-- Search -->
                <div class="col-md-6 col-lg-3">
                    <form class="rounded position-relative">
                        <form method="POST">
                            @csrf
                        <input class="form-control bg-transparent" type="search" placeholder="Поиск по названию"
                               aria-label="Search">
                            <label for="status_id">Статус отеля</label>
                            <select id="status_id" name="status_id">
                                <option value="0" selected>Все</option>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->title }}</option>
                                @endforeach
                            </select>
                            <button>Поиск</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </form>
                        <button
                            class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                            type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="page-content-wrapper p-xxl-4 ">
        <!-- Title -->
        <h5 class="mb-3">Заявки на регистрацию отелей</h5>

        <div class="shadow mt-5">
            <!-- Table head -->
            <div class="bg-light rounded p-3 d-none d-lg-block ">
                <div class="row row-cols-6 justify-content-between g-4">
                    <div class="col"><h6 class="mb-0">Изображение отеля</h6></div>
                    <div class="col"><h6 class="mb-0">Название отеля</h6></div>
                    <div class="col"><h6 class="mb-0">Email менеджера</h6></div>
                    <div class="col"><h6 class="mb-0">Адресс</h6></div>
                    <div class="col"><h6 class="mb-0">Статус</h6></div>
                    <div class="col"><h6 class="mb-0">Действие</h6></div>
                </div>
            </div>

            <hr>
            <!-- Table data -->
            <div
                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-2 g-sm-4 align-items-md-center justify-content-between px-2 py-4">

                @foreach($hotels as $hotel)
                    <div class="col">
                        <div class="w-80px flex-shrink-0">
                            @if(isset($hotel->img[0]->img_url))
                                <img class="rounded" src="{{ Storage::url($hotel->img[0]->img_url) }}"
                                     alt="{{ $hotel->img[0]->description }}">
                            @else
                                <img class="rounded" src="{{ Vite::asset('resources/img/logo/img.png') }}"
                                     alt="hotel img">
                            @endif
                        </div>
                    </div>
                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 ms-2">{{ $hotel->short_title }}</h6>
                    </div>


                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">{{ $hotel->short_title }}</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">{{ $hotel->city->title }}, {{ $hotel->address }}</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        @if($hotel->status->id == 1)
                            <span class="badge text-bg-warning">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                        @if($hotel->status->id == 2)
                            <span class="badge text-bg-success">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                        @if($hotel->status->id == 3)
                            <span class="badge text-bg-danger">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                    </div>
                    <!-- Data item -->
                    <div class="col"><a href="{{ route('admin.hotel.info', $hotel->id) }}" class="btn btn-sm btn-light mb-0">Просмотреть</a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
