@extends('layouts.admin')

@section('content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Главное меню</h1>
                </div>
            </div>
        </div>

{{--        <!-- Counter boxes START -->--}}
{{--        <div class="row g-4 mb-5">--}}
{{--            <!-- Counter item -->--}}
{{--            <div class="col-md-6 col-xxl-3">--}}
{{--                <div--}}
{{--                    class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">--}}
{{--                    <div class="d-flex justify-content-between align-items-center">--}}
{{--                        <!-- Digit -->--}}
{{--                        <div>--}}
{{--                            <h4 class="mb-0">56</h4>--}}
{{--                            <span class="h6 fw-light mb-0">Количество отелей</span>--}}
{{--                        </div>--}}
{{--                        <!-- Icon -->--}}
{{--                        <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i--}}
{{--                                class="fa-solid fa-hotel fa-fw"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Counter item -->--}}
{{--            <div class="col-md-6 col-xxl-3">--}}
{{--                <div--}}
{{--                    class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">--}}
{{--                    <div class="d-flex justify-content-between align-items-center">--}}
{{--                        <!-- Digit -->--}}
{{--                        <div>--}}
{{--                            <h4 class="mb-0">$836,789</h4>--}}
{{--                            <span class="h6 fw-light mb-0">Количство новых заявок</span>--}}
{{--                        </div>--}}
{{--                        <!-- Icon -->--}}
{{--                        <div class="icon-lg rounded-circle bg-success text-white mb-0"><i--}}
{{--                                class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Counter item -->--}}
{{--            <div class="col-md-6 col-xxl-3">--}}
{{--                <div--}}
{{--                    class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">--}}
{{--                    <div class="d-flex justify-content-between align-items-center">--}}
{{--                        <!-- Digit -->--}}
{{--                        <div>--}}
{{--                            <h4 class="mb-0">245</h4>--}}
{{--                            <span class="h6 fw-light mb-0">Количество пользователей системы</span>--}}
{{--                        </div>--}}
{{--                        <!-- Icon -->--}}
{{--                        <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i--}}
{{--                                class="fa-solid fa-bed fa-fw"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Counter item -->--}}
{{--            <div class="col-md-6 col-xxl-3">--}}
{{--                <div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">--}}
{{--                    <div class="d-flex justify-content-between align-items-center">--}}
{{--                        <!-- Digit -->--}}
{{--                        <div>--}}
{{--                            <h4 class="mb-0">147</h4>--}}
{{--                            <span class="h6 fw-light mb-0">Количестов клиентов</span>--}}
{{--                        </div>--}}
{{--                        <!-- Icon -->--}}
{{--                        <div class="icon-lg rounded-circle bg-info text-white mb-0"><i--}}
{{--                                class="fa-solid fa-building-circle-check fa-fw"></i></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Counter boxes END -->--}}

{{--        <!-- Widget START -->--}}
{{--        <div class="row g-4">--}}
{{--            <!-- Rooms START -->--}}
{{--            <div class="col-lg-6 col-xxl-4">--}}
{{--                <div class="card shadow h-100">--}}
{{--                    <!-- Card header -->--}}
{{--                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">--}}
{{--                        <h5 class="card-header-title">Новые заявки отелей</h5>--}}
{{--                        <a href="#" class="btn btn-link p-0 mb-0">Прросмотреть все</a>--}}
{{--                    </div>--}}

{{--                    <!-- Card body START -->--}}
{{--                    <div class="card-body">--}}
{{--                        <!-- Rooms item START -->--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <!-- Image and info -->--}}
{{--                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">--}}
{{--                                <!-- Avatar -->--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <img src="assets/images/category/hotel/4by3/04.jpg" class="rounded h-60px"--}}
{{--                                         alt="">--}}
{{--                                </div>--}}
{{--                                <!-- Info -->--}}
{{--                                <div class="ms-sm-3 mt-2 mt-sm-0">--}}
{{--                                    <h6 class="mb-1">Deluxe Pool View with Breakfast</h6>--}}
{{--                                    <ul class="nav nav-divider small">--}}
{{--                                        <li class="nav-item">18 Nov to 22 Nov</li>--}}
{{--                                        <li class="nav-item"><span class="text-success">Booked</span></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Button -->--}}
{{--                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>--}}
{{--                        </div>--}}
{{--                        <!-- Rooms item END -->--}}

{{--                        <hr><!-- Divider -->--}}
{{--                    </div>--}}
{{--                    <!-- Card body END -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Rooms END -->--}}

{{--            <!-- Upcoming Arrival START -->--}}
{{--            <div class="col-lg-6 col-xxl-4">--}}
{{--                <div class="card shadow h-100">--}}
{{--                    <!-- Card header -->--}}
{{--                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">--}}
{{--                        <h5 class="card-header-title">Истоия входов менеджеров отелей</h5>--}}
{{--                        <a href="#" class="btn btn-link p-0 mb-0">Просмотреть все</a>--}}
{{--                    </div>--}}

{{--                    <!-- Card body START -->--}}
{{--                    <div class="card-body p-3">--}}

{{--                        <!-- Arrival item -->--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <!-- Avatar and info -->--}}
{{--                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">--}}
{{--                                <!-- Avatar -->--}}
{{--                                <div class="avatar avatar-md flex-shrink-0">--}}
{{--                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"--}}
{{--                                         alt="avatar">--}}
{{--                                </div>--}}
{{--                                <!-- Info -->--}}
{{--                                <div class="ms-sm-2 mt-2 mt-sm-0">--}}
{{--                                    <h6 class="mb-1">Lori Stevens</h6>--}}
{{--                                    <ul class="nav nav-divider small">--}}
{{--                                        <li class="nav-item">Room 25A</li>--}}
{{--                                        <li class="nav-item">24Nov - 28Nov</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Button -->--}}
{{--                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i--}}
{{--                                    class="fa-solid fa-chevron-right fa-fw"></i></a>--}}
{{--                        </div>--}}
{{--                        <hr><!-- Divider -->--}}
{{--                    </div>--}}
{{--                    <!-- Card body END -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Upcoming Arrival END -->--}}

{{--            <!-- Reviews START -->--}}
{{--            <div class="col-lg-6 col-xxl-4">--}}
{{--                <div class="card shadow h-100">--}}
{{--                    <!-- Card header -->--}}
{{--                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">--}}
{{--                        <h5 class="card-header-title">История входов клиентов</h5>--}}
{{--                        <a href="#" class="btn btn-link p-0 mb-0">Просмотреть все</a>--}}
{{--                    </div>--}}

{{--                    <!-- Card body START -->--}}
{{--                    <div class="card-body p-3">--}}
{{--                        <!-- Rooms item START -->--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <!-- Image and info -->--}}
{{--                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">--}}
{{--                                <!-- Avatar -->--}}
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <img src="assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px"--}}
{{--                                         alt="">--}}
{{--                                </div>--}}
{{--                                <!-- Info -->--}}
{{--                                <div class="ms-sm-3 mt-2 mt-sm-0">--}}
{{--                                    <h6 class="mb-1">Deluxe Pool View with Breakfast</h6>--}}
{{--                                    <ul class="list-inline smaller mb-0">--}}
{{--                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item me-0">(35 reviews)</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Button -->--}}
{{--                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>--}}
{{--                        </div>--}}
{{--                        <!-- Rooms item END -->--}}
{{--                        <hr><!-- Divider -->--}}

{{--                    </div>--}}
{{--                    <!-- Card body END -->--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Reviews END -->
{{--        </div>--}}
{{--        <!-- Widget END -->--}}

    </div>
@endsection
