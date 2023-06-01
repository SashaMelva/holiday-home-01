@extends('layouts.app')

@section('content')
    <section class="container block-center m-tb-1">

        <div class="card border bg-transparent">
            <!-- Card header -->
            <div class="card-header bg-transparent border-bottom">
                <h4 class="card-header-title">Ваши бронирования</h4>
            </div>

            <!-- Card body START -->
            <div class="card-body p-0">

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-bottom-line nav-responsive nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1" aria-selected="true"
                           role="tab"><i class="bi bi-briefcase-fill fa-fw me-1"></i>Предстоящие бронирования</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1"
                           role="tab"><i class="bi bi-x-octagon fa-fw me-1"></i>Отменённые бронирования</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1"
                           role="tab"><i class="bi bi-patch-check fa-fw me-1"></i>Выполненые бронирования</a>
                    </li>
                </ul>

                <!-- Tabs content START -->
                <div class="tab-content p-2 p-sm-4" id="nav-tabContent">
                    <!-- Tab content item START -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                        <h6>Предсоящие бронирования </h6>
                        <?php $o = 0 ?>
                        @foreach($bookings as $booking)
                            @if($booking->status->title == "активен")
                                <!-- Card item START -->
                                <div class="card border mb-4">
                                    <!-- Card header -->
                                    <div
                                        class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                                        <!-- Icon and Title -->
                                        <div class="d-flex align-items-center">
                                            <div class="icon-lg bg-light rounded-circle flex-shrink-0"><i
                                                    class="fa-solid fa-plane"></i></div>
                                            <!-- Title -->
                                            <div class="ms-2">
                                                <h6 class="card-title mb-0">{{ $booking->room->hotel->full_title }}</h6>
                                                <p class="mb-0">{{ $booking->room->title }}</p>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item">ID бронирования:{{ $booking->id }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="mt-2 mt-md-0">
                                            <a href="{{route('booking.ticket', $booking->id)}}" class="btn btn-primary mb-0">Скачать билет</a>
                                        </div>
                                        <div class="mt-2 mt-md-0">
                                            <a href="{{ route('booking.disable', $booking->id) }}"
                                               class="btn btn-danger mb-0">Отменить</a>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата заселения</span>
                                                <h6 class="mb-0">{{ $booking->arrival_date }}</h6>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата выселения</span>
                                                <h6 class="mb-0">{{ $booking->date_departure }}</h6>
                                            </div>

                                            <div class="col-md-4">
                                                <span>Забронировано</span>
                                                <h6 class="mb-0">@if(isset($userData['surname']))
                                                        {{ $userData['surname'] }} {{ $userData['name'] }} {{ $userData['patronymic'] }}
                                                    @endif</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php $o++ ?>
                            @endif
                            <!-- Card item END -->
                        @endforeach
                        @if($o == 0)
                            <div class="bg-mode shadow p-4 rounded overflow-hidden">
                                <div class="row g-4 align-items-center">
                                    <!-- Content -->
                                    <div class="col-md-9">
                                        <h6>Похоже, вы никогда не бронировали через HOLIDAY HOME</h6>
                                        <h4 class="mb-2">При бронировании ваша поездка будет показана здесь. </h4>
                                        <a href="/" class="btn btn-primary-soft mb-0">Начните бронировать
                                            сейчас</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Tabs content item END -->

                    <!-- Tab content item START -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                        <h6>Отменено бронирований</h6>
                        <?php $i = 0; ?>
                        @foreach($bookings as $booking)
                            @if($booking->status->title == "отменён")
                                <!-- Card item START -->
                                <div class="card border">
                                    <!-- Card header -->
                                    <div
                                        class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                                        <!-- Icon and Title -->
                                        <div class="d-flex align-items-center">
                                            <div class="icon-lg bg-light rounded-circle flex-shrink-0"><i
                                                    class="fa-solid fa-hotel"></i></div>
                                            <!-- Title -->
                                            <div class="ms-2">
                                                <h6 class="card-title mb-0">{{ $booking->room->hotel->full_title }}</h6>
                                                <p class="mb-0">{{ $booking->room->title }}</p>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item">ID бронирования:{{ $booking->id }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="mt-2 mt-md-0">
                                            <p class="text-danger text-md-end mb-0">Бронирование отменено </p>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата заселения</span>
                                                <h6 class="mb-0">{{ $booking->arrival_date }}</h6>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата выселения</span>
                                                <h6 class="mb-0">{{ $booking->date_departure }}</h6>
                                            </div>

                                            <div class="col-md-4">
                                                <span>Отменено</span>
                                                <h6 class="mb-0">@if(isset($userData['surname']))
                                                        {{ $userData['surname'] }} {{ $userData['name'] }} {{ $userData['patronymic'] }}
                                                    @endif</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php $i++ ?>
                            @endif
                            <!-- Card item END -->
                        @endforeach
                        @if($i == 0)
                            <div class="bg-mode shadow p-4 rounded overflow-hidden">
                                <div class="row g-4 align-items-center">
                                    <!-- Content -->
                                    <div class="col-md-9">
                                        <h6>Похоже, вы никогда не бронировали через HOLIDAY HOME</h6>
                                        <h4 class="mb-2">При бронировании ваша поездка будет показана
                                            здесь. </h4>
                                        <a href="/" class="btn btn-primary-soft mb-0">Начните бронировать
                                            сейчас</a>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-md-3 text-end">
                                        <img src="assets/images/element/17.svg" class="mb-n5" alt="">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Tabs content item END -->

                    <!-- Tab content item START -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                        <h6>Выполнено бронирований</h6>

                        <?php $j = 0 ?>
                        @foreach($bookings as $booking)
                            @if($booking->status->title == "исполенн")
                                <!-- Card item START -->
                                <div class="card border">
                                    <!-- Card header -->
                                    <div
                                        class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
                                        <!-- Icon and Title -->
                                        <div class="d-flex align-items-center">
                                            <div class="icon-lg bg-light rounded-circle flex-shrink-0"><i
                                                    class="fa-solid fa-hotel"></i></div>
                                            <!-- Title -->
                                            <div class="ms-2">
                                                <h6 class="card-title mb-0">{{ $booking->room->hotel->full_title }}</h6>
                                                <p class="mb-0">{{ $booking->room->title }}</p>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item">ID бронирования:{{ $booking->id }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="mt-2 mt-md-0">
                                            <a href="{{ route('booking.ticket', $booking->id) }}" class="text-md-end mb-0">Просмотрите билет</a>
                                        </div>
                                    </div>

                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата заселения</span>
                                                <h6 class="mb-0">{{ $booking->arrival_date }}</h6>
                                            </div>

                                            <div class="col-sm-6 col-md-4">
                                                <span>Дата выселения</span>
                                                <h6 class="mb-0">{{ $booking->date_departure }}</h6>
                                            </div>

                                            <div class="col-md-4">
                                                <span>Выполнено</span>
                                                <h6 class="mb-0">@if(isset($userData['surname']))
                                                        {{ $userData['surname'] }} {{ $userData['name'] }} {{ $userData['patronymic'] }}
                                                    @endif</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php $j++ ?>
                            @endif

                            <!-- Tabs content item END -->
                        @endforeach
                        @if($j == 0)
                            <div class="bg-mode shadow p-4 rounded overflow-hidden">
                                <div class="row g-4 align-items-center">
                                    <!-- Content -->
                                    <div class="col-md-9">
                                        <h6>Похоже, вы никогда не бронировали через HOLIDAY HOME</h6>
                                        <h4 class="mb-2">При бронировании ваша поездка будет показана здесь. </h4>
                                        <a href="/" class="btn btn-primary-soft mb-0">Начните бронировать
                                            сейчас</a>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-md-3 text-end">
                                        <img src="assets/images/element/17.svg" class="mb-n5" alt="">
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Card body END -->
        </div>
    </section>
@endsection
