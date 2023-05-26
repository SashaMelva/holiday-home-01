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

            <!-- Earning item -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-body border p-4 h-100">
                    <h6>Заработок
                        <a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus"
                           data-bs-placement="top" data-bs-content="After US royalty withholding tax"
                           data-bs-original-title="" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-journals" viewBox="0 0 16 16">
                                <path
                                    d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                <path
                                    d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                            </svg>
                        </a>
                    </h6>
                    <h2 class="text-success">$25,869</h2>
                    <p class="mb-2"><span class="text-primary me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last
                        month</p>
                    <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">View
                            statement</a></div>
                </div>
            </div>

            <!-- Booked Rooms item -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-body border p-4 h-100">
                    <h6>Забронировано комнат</h6>
                    <h2 class="text-info">58</h2>
                    <p class="mb-2">Всего <span class="text-danger me-1">102</span> номера</p>
                    <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Просмотреть
                            бронирования</a></div>
                </div>
            </div>

            <!-- Available Rooms item -->
            <div class="col-md-6 col-xl-4">
                <div class="card card-body border p-4 h-100">
                    <h6>Доступные номера </h6>
                    <h2 class="text-warning">42</h2>
                    <p class="mb-2">Всего <span class="text-danger me-1">102</span> номера</p>
                    <div class="mt-auto text-primary-hover"><a href="#" class="text-decoration-underline p-0 mb-0">Просмотреть номера</a></div>
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
                        <h5 class="card-header-title">Мои объявления<span
                                class="badge bg-primary bg-opacity-10 text-primary ms-2">5 видов</span></h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body vstack gap-3">
                        <!-- Listing item START -->
                        <div class="card border p-2">
                            <div class="row g-4">
                                <!-- Card img -->
                                <div class="col-md-3 col-lg-2">
                                    <img src="assets/images/category/hotel/4by3/10.jpg" class="card-img rounded-2"
                                         alt="Card image">
                                </div>

                                <!-- Card body -->
                                <div class="col-md-9 col-lg-10">
                                    <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                        <!-- Buttons -->
                                        <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                            <!-- Share button -->
                                            <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                               id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <!-- dropdown button -->
                                            <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded"
                                                aria-labelledby="dropdownAction2">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-info-circle me-1"></i>Report</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-slash-circle me-1"></i>Disable</a></li>
                                            </ul>
                                        </div>

                                        <!-- Title -->
                                        <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village
                                                Resort &amp; Spa</a></h5>
                                        <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

                                        <!-- Price and Button -->
                                        <div
                                            class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                            <!-- Button -->
                                            <div class="d-flex align-items-center">
                                                <h5 class="fw-bold mb-0 me-1">$1586</h5>
                                                <span class="mb-0 me-2">/day</span>
                                            </div>
                                            <!-- Price -->
                                            <div class="hstack gap-2 mt-3 mt-sm-0">
                                                <a href="#" class="btn btn-sm btn-primary mb-0"><i
                                                        class="bi bi-pencil-square fa-fw me-1"></i>Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger mb-0"><i
                                                        class="bi bi-trash3 fa-fw me-1"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Listing item END -->
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
        </div>
        <!-- Listing table END -->
    </div>
</section>
@endsection
