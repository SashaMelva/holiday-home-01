@extends('layouts.admin')

@section('content')
    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Список агентов</h1>
                </div>
            </div>
        </div>

        <!-- Search and select START -->
        <div class="row g-3 align-items-center justify-content-between mb-5">
            <!-- Search -->
            <div class="col-md-8">
                <form class="rounded position-relative">
                    <input class="form-control pe-5" type="search" placeholder="Поиск по ФИО" aria-label="Search">
                    <button class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
                            type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </form>
                <p class="mb-sm-0 text-center text-sm-start">Показано с 1 по 8 из 20 записей</p>
            </div>

            <div class="row g-4">
                <!-- Card item -->
                <div class="col-md-6 col-lg-4 col-xxl-3">
                    <div class="card border h-100">
                        <!-- Dropdown button -->
                        <div class="dropdown position-absolute top-0 end-0 m-3">
                            <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button"
                               id="dropdownShare1"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots fa-fw"></i>
                            </a>
                            <!-- dropdown button -->
                            <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                aria-labelledby="dropdownShare1">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Card body -->
                        <div class="card-body text-center pb-0">
                            <!-- Avatar Image -->
                            <div class="avatar avatar-xl flex-shrink-0 mb-3">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                            </div>
                            <!-- Title -->
                            <h5 class="mb-1">ФИО</h5>
                            <small>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                Los Angeles, USA</small>
                            <!-- Info and rating -->
                            <div class="d-flex justify-content-between mt-3">
                                <h6 class="mb-0 small"><span class="fw-light">Всего объявлений:</span> 04</h6>
                                <h6 class="mb-0 small">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
                            </div>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer d-flex gap-3 align-items-center">
                            <a href="{{ route('agents.show', 1) }}" class="btn btn-sm btn-primary-soft mb-0 w-100">Просмотреть
                                детали</a>
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                    <path
                                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
