@extends('layouts.app')

@section('content')

    <!-- =======================
Main Banner START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <!-- Title -->
                    <h1 class="mb-4 display-5">Разместите свою недвижимость на <span
                            class="text-primary">Holiday Home</span></h1>
                    <!-- Info -->
                    <p class="mb-4">Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise
                        joy man children rejoiced.</p>
                    <!-- Button -->
                    <a href="{{ route('hotel-accommodation.add') }}" class="btn btn-primary-soft mb-4">Добавте
                        объявление
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <!-- Image -->
                <div class="col-lg-5 text-center">
                    <img src="{{ Vite::asset('resources/img/img_1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Benefits START -->
    <section class="pt-0 pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 p-sm-5 rounded-3">
                        <!-- Title -->
                        <h2 class="fs-3 text-center mb-4 mb-sm-5">Почему работать с нами легко</h2>

                        <div class="row g-4">
                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="{{ Vite::asset('resources/img/img_2.png') }}" class="h-70px mb-3"
                                              alt=""></div>
                                    <h5>List any type of properties</h5>
                                    <p class="mb-0">Speedily say has suitable disposal add boy. On forth doubt miles of
                                        child. Exercise joy man children rejoiced.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="{{ Vite::asset('resources/img/img_3.png') }}" class="h-70px mb-3"
                                              alt=""></div>
                                    <h5>Import detail easily</h5>
                                    <p class="mb-0">Two before narrow not relied on how except moment myself Dejection
                                        assurance Mrs led certainly open Betrayed.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="{{ Vite::asset('resources/img/img_4.png') }}" class="h-70px mb-3"
                                              alt=""></div>
                                    <h5>Step by step guide</h5>
                                    <p class="mb-0">Rooms oh fully taken by worse do. Points afraid but may end
                                        law.Points afraid but may end law.</p>
                                </div>
                            </div>
                            <!-- Card END -->

                            <!-- Card START -->
                            <div class="col-md-6">
                                <div class="card card-body p-4">
                                    <div><img src="{{ Vite::asset('resources/img/img_5.png') }}" class="h-70px mb-3"
                                              alt=""></div>
                                    <h5>Marvelous discounts</h5>
                                    <p class="mb-0">Prospective should start broadly and then narrow their list down to
                                        colleges that best fit experts</p>
                                </div>
                            </div>
                            <!-- Card END -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Benefits END -->

    <!-- =======================
    Action box START -->
    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <!-- Action box START -->
                    <div class="card card-body shadow p-4">
                        <div class="row g-4 justify-content-between align-items-center">
                            <!-- Image -->
                            <div class="col-sm-3 col-lg-2">
                                <img src="assets/images/element/22.svg" alt="">
                            </div>

                            <!-- Title and content -->
                            <div class="col-sm-9 col-lg-6 col-xl-7">
                                <h4>Why did you choose us</h4>
                                <p class="mb-0">Water timed folly right aware if oh truth. Large above be to means.
                                    Dashwood does provide stronger is.</p>
                            </div>

                            <!-- Button -->
                            <div class="col-lg-3 col-xxl-2 d-grid">
                                <a href="#" class="btn btn-primary mb-0">Become a host</a>
                            </div>
                        </div>
                    </div>
                    <!-- Action box END -->
                </div>
            </div>
        </div>
    </section>
@endsection
