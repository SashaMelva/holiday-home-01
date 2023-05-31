@extends('layouts.agent')

@section('content')
    <section>
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                        </svg>
                        Главная
                    </h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Counter START -->
            <div class="row g-3">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-success rounded-3 text-white">
                                <i class="bi bi-journals"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ $hotel->number_rooms }}</h4>
                                <span>Всего номеров</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-warning rounded-3 text-white">
                                <i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ count($rooms) }}</h4>
                                <span>Типов номеров</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Counter item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card card-body border">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-xl bg-info rounded-3 text-white">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <!-- Content -->
                            <div class="ms-3">
                                <h4>{{ count($booking) }}</h4>
                                <span>Бронирований</span>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Counter END -->

        </div>
    </section>
@endsection
