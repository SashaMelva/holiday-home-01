@extends('layouts.admin')

@section('content')
    <!-- Top bar START -->
    <nav class="navbar top-bar navbar-light py-0 py-xl-3">
        <div class="container-fluid p-0">
            <div class="d-flex align-items-center w-100">

                <!-- Logo START -->
                <div class="d-flex align-items-center d-xl-none">
                    <a class="navbar-brand" href="index.html">
                        <img class="navbar-brand-item h-40px" src="assets/images/logo-icon.svg" alt="">
                    </a>
                </div>
                <!-- Logo END -->

                <!-- Toggler for sidebar START -->
                <div class="navbar-expand-xl sidebar-offcanvas-menu">
                    <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar"
                            aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                        <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                    </button>
                </div>
                <!-- Toggler for sidebar END -->

                <!-- Top bar left -->
                <div class="navbar-expand-lg ms-auto ms-xl-0">
                    <!-- Toggler for menubar START -->
                    <button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTopContent" aria-controls="navbarTopContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-search"></i>
                    </button>
                    <!-- Toggler for menubar END -->

                    <!-- Topbar menu START -->
                    <div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
                        <!-- Top search START -->
                        <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                            <div class="nav-item w-100">
                                <form class="position-relative">
                                    <input class="form-control bg-light pe-5" type="search" placeholder="Search"
                                           aria-label="Search">
                                    <button
                                        class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y"
                                        type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Top search END -->
                    </div>
                    <!-- Topbar menu END -->
                </div>
                <!-- Top bar left END -->

                <!-- Top bar right START -->
                <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                    <!-- Dark mode options START -->
                    <li class="nav-item dropdown ms-3">
                        <button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme" type="button"
                                aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                <use href="#"></use>
                            </svg>
                        </button>

                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="light">
                                    <svg width="16" height="16" fill="currentColor"
                                         class="bi bi-brightness-high-fill fa-fw mode-switch me-1"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                                        <use href="#"></use>
                                    </svg>
                                    Light
                                </button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                                        <path
                                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                                        <use href="#"></use>
                                    </svg>
                                    Dark
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                         viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                        <use href="#"></use>
                                    </svg>
                                    Auto
                                </button>
                            </li>
                        </ul>
                    </li>
                    <!-- Dark mode options END-->

                    <!-- Notification dropdown START -->
                    <li class="nav-item dropdown ms-3">
                        <!-- Notification button -->
                        <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <!-- Notification dote -->
                        <span class="notif-badge animation-blink"></span>

                        <!-- Notification dropdown menu START -->
                        <div
                            class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div
                                    class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
                                    <h6 class="m-0">Notifications <span
                                            class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-unstyled p-2">
                                        <!-- Notification item -->
                                        <li>
                                            <a href="#"
                                               class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                                <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                                <p class="mb-0 small">Find the flexible ticket on flights around the
                                                    world. Start searching today</p>
                                                <span>Wednesday</span>
                                            </a>
                                        </li>
                                        <!-- Notification item -->
                                        <li>
                                            <a href="#"
                                               class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                                <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a
                                                    stay</h6>
                                                <span>15 Nov 2022</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Card body END -->

                                <!-- Card footer -->
                                <div class="card-footer bg-transparent text-center border-top">
                                    <a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
                                </div>
                            </div>
                        </div>
                        <!-- Notification dropdown menu END -->
                    </li>
                    <!-- Notification dropdown END -->

                    <!-- Profile dropdown START -->
                    <li class="nav-item ms-3 dropdown">
                        <!-- Avatar -->
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                           data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img class="avatar-img rounded-2" src="assets/images/avatar/01.jpg" alt="avatar">
                        </a>

                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                            aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow"
                                             src="assets/images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                        <p class="small m-0">example@gmail.com</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Links -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My
                                    Bookings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help
                                    Center</a></li>
                            <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i
                                        class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                        </ul>
                    </li>
                    <!-- Profile dropdown END -->
                </ul>
                <!-- Top bar right END -->
            </div>
        </div>
    </nav>
    <!-- Top bar END -->

    <!-- Page main content START -->
    <div class="page-content-wrapper p-xxl-4">

        <!-- Title -->
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
                    <div class="d-grid"><a href="#" class="btn btn-primary-soft mb-0"><i
                                class="bi bi-plus-lg fa-fw"></i> New Booking</a></div>
                </div>
            </div>
        </div>

        <!-- Counter boxes START -->
        <div class="row g-4 mb-5">
            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div
                    class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0">56</h4>
                            <span class="h6 fw-light mb-0">Total Hotels</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-warning text-white mb-0"><i
                                class="fa-solid fa-hotel fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div
                    class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0">$836,789</h4>
                            <span class="h6 fw-light mb-0">Total Incomes</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-success text-white mb-0"><i
                                class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div
                    class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0">245</h4>
                            <span class="h6 fw-light mb-0">Total Rooms</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-primary text-white mb-0"><i
                                class="fa-solid fa-bed fa-fw"></i></div>
                    </div>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-md-6 col-xxl-3">
                <div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Digit -->
                        <div>
                            <h4 class="mb-0">147</h4>
                            <span class="h6 fw-light mb-0">Booked Room</span>
                        </div>
                        <!-- Icon -->
                        <div class="icon-lg rounded-circle bg-info text-white mb-0"><i
                                class="fa-solid fa-building-circle-check fa-fw"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter boxes END -->

        <!-- Hotel grid START -->
        <div class="row g-4 mb-5">
            <!-- Title -->
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h4 class="mb-0">Popular Hotels</h4>
                    <a href="#" class="btn btn-primary-soft mb-0">View All</a>
                </div>
            </div>

            <!-- Hotel item -->
            <div class="col-lg-6">
                <div class="card shadow p-3">
                    <div class="row g-4">
                        <!-- Card img -->
                        <div class="col-md-3">
                            <img src="assets/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">
                        </div>

                        <!-- Card body -->
                        <div class="col-md-9">
                            <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                <!-- Buttons -->
                                <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                       id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow"
                                        aria-labelledby="dropdownAction1">
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-info-circle me-2"></i>Report</a></li>
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                    </ul>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village
                                        Resort &amp; Spa</a></h5>
                                <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California -
                                    24578</small>

                                <!-- Price and Button -->
                                <div
                                    class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-bold mb-0 me-1">$1586</h5>
                                        <span class="mb-0 me-2">/day</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="hstack gap-2 mt-3 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i
                                                class="bi bi-pencil-square fa-fw"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i
                                                class="bi bi-slash-circle fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel item -->
            <div class="col-lg-6">
                <div class="card shadow p-3">
                    <div class="row g-4">
                        <!-- Card img -->
                        <div class="col-md-3">
                            <img src="assets/images/category/hotel/4by3/08.jpg" class="rounded-2" alt="Card image">
                        </div>

                        <!-- Card body -->
                        <div class="col-md-9">
                            <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                <!-- Buttons -->
                                <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                       id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow"
                                        aria-labelledby="dropdownAction2">
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-info-circle me-2"></i>Report</a></li>
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                    </ul>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Courtyard by Marriott
                                        New York</a></h5>
                                <small><i class="bi bi-geo-alt me-2"></i>258 W jimmy Street, New york -
                                    24578</small>

                                <!-- Price and Button -->
                                <div
                                    class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-bold mb-0 me-1">$1025</h5>
                                        <span class="mb-0 me-2">/day</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="hstack gap-2 mt-3 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i
                                                class="bi bi-pencil-square fa-fw"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i
                                                class="bi bi-slash-circle fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel item -->
            <div class="col-lg-6">
                <div class="card shadow p-3">
                    <div class="row g-4">
                        <!-- Card img -->
                        <div class="col-md-3">
                            <img src="assets/images/category/hotel/4by3/09.jpg" class="rounded-2" alt="Card image">
                        </div>

                        <!-- Card body -->
                        <div class="col-md-9">
                            <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                <!-- Buttons -->
                                <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                       id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow"
                                        aria-labelledby="dropdownAction3">
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-info-circle me-2"></i>Report</a></li>
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                    </ul>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Park Plaza Lodge
                                        Hotel</a></h5>
                                <small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California -
                                    24578</small>

                                <!-- Price and Button -->
                                <div
                                    class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-bold mb-0 me-1">$958</h5>
                                        <span class="mb-0 me-2">/day</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="hstack gap-2 mt-3 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i
                                                class="bi bi-pencil-square fa-fw"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i
                                                class="bi bi-slash-circle fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel item -->
            <div class="col-lg-6">
                <div class="card shadow p-3">
                    <div class="row g-4">
                        <!-- Card img -->
                        <div class="col-md-3">
                            <img src="assets/images/category/hotel/4by3/07.jpg" class="rounded-2" alt="Card image">
                        </div>

                        <!-- Card body -->
                        <div class="col-md-9">
                            <div class="card-body position-relative d-flex flex-column p-0 h-100">

                                <!-- Buttons -->
                                <div class="list-inline-item dropdown position-absolute top-0 end-0">
                                    <!-- Share button -->
                                    <a href="#" class="btn btn-sm btn-round btn-light" role="button"
                                       id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow"
                                        aria-labelledby="dropdownAction4">
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-info-circle me-2"></i>Report</a></li>
                                        <li><a class="dropdown-item small" href="#"><i
                                                    class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                    </ul>
                                </div>

                                <!-- Title -->
                                <h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Royal Beach Resort</a>
                                </h5>
                                <small><i class="bi bi-geo-alt me-2"></i>589 J Wall Street, London - 24578</small>

                                <!-- Price and Button -->
                                <div
                                    class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
                                    <!-- Price -->
                                    <div class="d-flex align-items-center">
                                        <h5 class="fw-bold mb-0 me-1">$1005</h5>
                                        <span class="mb-0 me-2">/day</span>
                                    </div>
                                    <!-- Button -->
                                    <div class="hstack gap-2 mt-3 mt-sm-0">
                                        <a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i
                                                class="bi bi-pencil-square fa-fw"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i
                                                class="bi bi-slash-circle fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hotel grid END -->

        <!-- Widget START -->
        <div class="row g-4">
            <!-- Booking Chart START -->
            <div class="col-xxl-8">
                <!-- Chart START -->
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="card-header-title">Guest Activity</h5>
                    </div>

                    <!-- Card body -->
                    <div class="card-body" style="position: relative;">
                        <!-- Content -->
                        <div class="d-flex gap-4 mb-3">
                            <h6><span class="fw-light"><i
                                        class="bi bi-square-fill text-primary"></i> Check-in:</span> 475 Guests</h6>
                            <h6><span class="fw-light"><i class="bi bi-square-fill text-info"></i> Check-out:</span>
                                157 Guests</h6>
                        </div>
                        <!-- Apex chart -->
                        <div id="ChartGuesttraffic" class="mt-2" style="min-height: 365px;">
                            <div id="apexchartstyvubpru"
                                 class="apexcharts-canvas apexchartstyvubpru apexcharts-theme-light"
                                 style="width: 1369px; height: 350px;">
                                <svg id="SvgjsSvg1115" width="1369" height="350" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable"
                                     xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent;">
                                    <foreignObject x="0" y="0" width="1369" height="350">
                                        <div class="apexcharts-legend apexcharts-align-center position-bottom"
                                             xmlns="http://www.w3.org/1999/xhtml"
                                             style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                            <div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="1"
                                                 seriesname="Checkxin" data:collapsed="false"><span
                                                    class="apexcharts-legend-marker"
                                                    style="background: rgb(81, 67, 217) !important; color: rgb(81, 67, 217); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                    rel="1" data:collapsed="false"></span><span
                                                    class="apexcharts-legend-text"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    rel="1" i="0" data:default-text="Check-in"
                                                    data:collapsed="false">Check-in</span></div>
                                            <div class="apexcharts-legend-series" style="margin: 2px 5px;" rel="2"
                                                 seriesname="Checkxout" data:collapsed="false"><span
                                                    class="apexcharts-legend-marker"
                                                    style="background: rgb(23, 162, 184) !important; color: rgb(23, 162, 184); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                    rel="2" data:collapsed="false"></span><span
                                                    class="apexcharts-legend-text"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    rel="2" i="1" data:default-text="Check-out"
                                                    data:collapsed="false">Check-out</span></div>
                                        </div>
                                        <style type="text/css">

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }</style>
                                    </foreignObject>
                                    <g id="SvgjsG1117" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(47.383331298828125, 30)">
                                        <defs id="SvgjsDefs1116">
                                            <clipPath id="gridRectMasktyvubpru">
                                                <rect id="SvgjsRect1123" width="1307.6416683197021" height="269.966"
                                                      x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMasktyvubpru"></clipPath>
                                            <clipPath id="nonForecastMasktyvubpru"></clipPath>
                                            <clipPath id="gridRectMarkerMasktyvubpru">
                                                <rect id="SvgjsRect1124" width="1303.6416683197021" height="269.966"
                                                      x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1129" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                <stop id="SvgjsStop1130" stop-opacity="0.65"
                                                      stop-color="rgba(81,67,217,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop1131" stop-opacity="0.5"
                                                      stop-color="rgba(168,161,236,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1132" stop-opacity="0.5"
                                                      stop-color="rgba(168,161,236,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1138" x1="0" y1="0" x2="0"
                                                            y2="1">
                                                <stop id="SvgjsStop1139" stop-opacity="0.65"
                                                      stop-color="rgba(23,162,184,0.65)" offset="0"></stop>
                                                <stop id="SvgjsStop1140" stop-opacity="0.5"
                                                      stop-color="rgba(139,209,220,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1141" stop-opacity="0.5"
                                                      stop-color="rgba(139,209,220,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1122" x1="0" y1="0" x2="0" y2="265.966" stroke="#b6b6b6"
                                              stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                              width="1" height="265.966" fill="#b1b9c4" filter="none"
                                              fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1144" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1145" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)">
                                                <text id="SvgjsText1147" font-family="Helvetica, Arial, sans-serif"
                                                      x="0" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1148">SUN</tspan>
                                                    <title>SUN</title></text>
                                                <text id="SvgjsText1150" font-family="Helvetica, Arial, sans-serif"
                                                      x="216.60694471995038" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1151">MON</tspan>
                                                    <title>MON</title></text>
                                                <text id="SvgjsText1153" font-family="Helvetica, Arial, sans-serif"
                                                      x="433.2138894399007" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1154">TUE</tspan>
                                                    <title>TUE</title></text>
                                                <text id="SvgjsText1156" font-family="Helvetica, Arial, sans-serif"
                                                      x="649.820834159851" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1157">WED</tspan>
                                                    <title>WED</title></text>
                                                <text id="SvgjsText1159" font-family="Helvetica, Arial, sans-serif"
                                                      x="866.4277788798013" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1160">THU</tspan>
                                                    <title>THU</title></text>
                                                <text id="SvgjsText1162" font-family="Helvetica, Arial, sans-serif"
                                                      x="1083.0347235997517" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1163">FRI</tspan>
                                                    <title>FRI</title></text>
                                                <text id="SvgjsText1165" font-family="Helvetica, Arial, sans-serif"
                                                      x="1299.6416683197021" y="294.966" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="12px" font-weight="400"
                                                      fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1166">SAT</tspan>
                                                    <title>SAT</title></text>
                                            </g>
                                            <line id="SvgjsLine1167" x1="0" y1="266.966" x2="1299.6416683197021"
                                                  y2="266.966" stroke="#e0e0e0" stroke-dasharray="0"
                                                  stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG1180" class="apexcharts-grid">
                                            <g id="SvgjsG1181" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1190" x1="0" y1="0" x2="1299.6416683197021"
                                                      y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1191" x1="0" y1="66.4915" x2="1299.6416683197021"
                                                      y2="66.4915" stroke="#e0e0e0" stroke-dasharray="0"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1192" x1="0" y1="132.983" x2="1299.6416683197021"
                                                      y2="132.983" stroke="#e0e0e0" stroke-dasharray="0"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1193" x1="0" y1="199.4745"
                                                      x2="1299.6416683197021" y2="199.4745" stroke="#e0e0e0"
                                                      stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1194" x1="0" y1="265.966" x2="1299.6416683197021"
                                                      y2="265.966" stroke="#e0e0e0" stroke-dasharray="0"
                                                      class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1182" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1183" x1="0" y1="266.966" x2="0" y2="272.966"
                                                  stroke="#e0e0e0" stroke-dasharray="0"
                                                  class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1184" x1="216.60694471995035" y1="266.966"
                                                  x2="216.60694471995035" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1185" x1="433.2138894399007" y1="266.966"
                                                  x2="433.2138894399007" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1186" x1="649.8208341598511" y1="266.966"
                                                  x2="649.8208341598511" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1187" x1="866.4277788798014" y1="266.966"
                                                  x2="866.4277788798014" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1188" x1="1083.0347235997517" y1="266.966"
                                                  x2="1083.0347235997517" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1189" x1="1299.6416683197021" y1="266.966"
                                                  x2="1299.6416683197021" y2="272.966" stroke="#e0e0e0"
                                                  stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1196" x1="0" y1="265.966" x2="1299.6416683197021"
                                                  y2="265.966" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1195" x1="0" y1="1" x2="0" y2="265.966"
                                                  stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1125" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1126" class="apexcharts-series" seriesName="Checkxin"
                                               data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1133"
                                                      d="M 0 265.966L 0 197.2581166666667C 75.81243065198262 197.2581166666667 140.79451406796773 177.3106666666667 216.60694471995035 177.3106666666667C 292.419375371933 177.3106666666667 357.40145878791805 203.90726666666666 433.2138894399007 203.90726666666666C 509.02632009188335 203.90726666666666 574.0084035078685 152.93045 649.8208341598511 152.93045C 725.6332648118337 152.93045 790.6153482278188 172.8779 866.4277788798014 172.8779C 942.240209531784 172.8779 1007.2222929477691 24.380216666666684 1083.0347235997517 24.380216666666684C 1158.8471542517343 24.380216666666684 1223.8292376677196 44.32766666666669 1299.6416683197021 44.32766666666669C 1299.6416683197021 44.32766666666669 1299.6416683197021 44.32766666666669 1299.6416683197021 265.966M 1299.6416683197021 44.32766666666669z"
                                                      fill="url(#SvgjsLinearGradient1129)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMasktyvubpru)"
                                                      pathTo="M 0 265.966L 0 197.2581166666667C 75.81243065198262 197.2581166666667 140.79451406796773 177.3106666666667 216.60694471995035 177.3106666666667C 292.419375371933 177.3106666666667 357.40145878791805 203.90726666666666 433.2138894399007 203.90726666666666C 509.02632009188335 203.90726666666666 574.0084035078685 152.93045 649.8208341598511 152.93045C 725.6332648118337 152.93045 790.6153482278188 172.8779 866.4277788798014 172.8779C 942.240209531784 172.8779 1007.2222929477691 24.380216666666684 1083.0347235997517 24.380216666666684C 1158.8471542517343 24.380216666666684 1223.8292376677196 44.32766666666669 1299.6416683197021 44.32766666666669C 1299.6416683197021 44.32766666666669 1299.6416683197021 44.32766666666669 1299.6416683197021 265.966M 1299.6416683197021 44.32766666666669z"
                                                      pathFrom="M -1 265.966L -1 265.966L 216.60694471995035 265.966L 433.2138894399007 265.966L 649.8208341598511 265.966L 866.4277788798014 265.966L 1083.0347235997517 265.966L 1299.6416683197021 265.966"></path>
                                                <path id="SvgjsPath1134"
                                                      d="M 0 197.2581166666667C 75.81243065198262 197.2581166666667 140.79451406796773 177.3106666666667 216.60694471995035 177.3106666666667C 292.419375371933 177.3106666666667 357.40145878791805 203.90726666666666 433.2138894399007 203.90726666666666C 509.02632009188335 203.90726666666666 574.0084035078685 152.93045 649.8208341598511 152.93045C 725.6332648118337 152.93045 790.6153482278188 172.8779 866.4277788798014 172.8779C 942.240209531784 172.8779 1007.2222929477691 24.380216666666684 1083.0347235997517 24.380216666666684C 1158.8471542517343 24.380216666666684 1223.8292376677196 44.32766666666669 1299.6416683197021 44.32766666666669"
                                                      fill="none" fill-opacity="1" stroke="#5143d9"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                      stroke-dasharray="0" class="apexcharts-area" index="0"
                                                      clip-path="url(#gridRectMasktyvubpru)"
                                                      pathTo="M 0 197.2581166666667C 75.81243065198262 197.2581166666667 140.79451406796773 177.3106666666667 216.60694471995035 177.3106666666667C 292.419375371933 177.3106666666667 357.40145878791805 203.90726666666666 433.2138894399007 203.90726666666666C 509.02632009188335 203.90726666666666 574.0084035078685 152.93045 649.8208341598511 152.93045C 725.6332648118337 152.93045 790.6153482278188 172.8779 866.4277788798014 172.8779C 942.240209531784 172.8779 1007.2222929477691 24.380216666666684 1083.0347235997517 24.380216666666684C 1158.8471542517343 24.380216666666684 1223.8292376677196 44.32766666666669 1299.6416683197021 44.32766666666669"
                                                      pathFrom="M -1 265.966L -1 265.966L 216.60694471995035 265.966L 433.2138894399007 265.966L 649.8208341598511 265.966L 866.4277788798014 265.966L 1083.0347235997517 265.966L 1299.6416683197021 265.966"></path>
                                                <g id="SvgjsG1127" class="apexcharts-series-markers-wrap"
                                                   data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1202" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker waykkc7va no-pointer-events"
                                                                stroke="#ffffff" fill="#5143d9" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1135" class="apexcharts-series" seriesName="Checkxout"
                                               data:longestSeries="true" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1142"
                                                      d="M 0 265.966L 0 241.58578333333335C 75.81243065198262 241.58578333333335 140.79451406796773 195.04173333333335 216.60694471995035 195.04173333333335C 292.419375371933 195.04173333333335 357.40145878791805 166.22875 433.2138894399007 166.22875C 509.02632009188335 166.22875 574.0084035078685 195.04173333333335 649.8208341598511 195.04173333333335C 725.6332648118337 195.04173333333335 790.6153482278188 190.60896666666667 866.4277788798014 190.60896666666667C 942.240209531784 190.60896666666667 1007.2222929477691 150.71406666666667 1083.0347235997517 150.71406666666667C 1158.8471542517343 150.71406666666667 1223.8292376677196 175.09428333333335 1299.6416683197021 175.09428333333335C 1299.6416683197021 175.09428333333335 1299.6416683197021 175.09428333333335 1299.6416683197021 265.966M 1299.6416683197021 175.09428333333335z"
                                                      fill="url(#SvgjsLinearGradient1138)" fill-opacity="1"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                      stroke-dasharray="0" class="apexcharts-area" index="1"
                                                      clip-path="url(#gridRectMasktyvubpru)"
                                                      pathTo="M 0 265.966L 0 241.58578333333335C 75.81243065198262 241.58578333333335 140.79451406796773 195.04173333333335 216.60694471995035 195.04173333333335C 292.419375371933 195.04173333333335 357.40145878791805 166.22875 433.2138894399007 166.22875C 509.02632009188335 166.22875 574.0084035078685 195.04173333333335 649.8208341598511 195.04173333333335C 725.6332648118337 195.04173333333335 790.6153482278188 190.60896666666667 866.4277788798014 190.60896666666667C 942.240209531784 190.60896666666667 1007.2222929477691 150.71406666666667 1083.0347235997517 150.71406666666667C 1158.8471542517343 150.71406666666667 1223.8292376677196 175.09428333333335 1299.6416683197021 175.09428333333335C 1299.6416683197021 175.09428333333335 1299.6416683197021 175.09428333333335 1299.6416683197021 265.966M 1299.6416683197021 175.09428333333335z"
                                                      pathFrom="M -1 265.966L -1 265.966L 216.60694471995035 265.966L 433.2138894399007 265.966L 649.8208341598511 265.966L 866.4277788798014 265.966L 1083.0347235997517 265.966L 1299.6416683197021 265.966"></path>
                                                <path id="SvgjsPath1143"
                                                      d="M 0 241.58578333333335C 75.81243065198262 241.58578333333335 140.79451406796773 195.04173333333335 216.60694471995035 195.04173333333335C 292.419375371933 195.04173333333335 357.40145878791805 166.22875 433.2138894399007 166.22875C 509.02632009188335 166.22875 574.0084035078685 195.04173333333335 649.8208341598511 195.04173333333335C 725.6332648118337 195.04173333333335 790.6153482278188 190.60896666666667 866.4277788798014 190.60896666666667C 942.240209531784 190.60896666666667 1007.2222929477691 150.71406666666667 1083.0347235997517 150.71406666666667C 1158.8471542517343 150.71406666666667 1223.8292376677196 175.09428333333335 1299.6416683197021 175.09428333333335"
                                                      fill="none" fill-opacity="1" stroke="#17a2b8"
                                                      stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                                      stroke-dasharray="0" class="apexcharts-area" index="1"
                                                      clip-path="url(#gridRectMasktyvubpru)"
                                                      pathTo="M 0 241.58578333333335C 75.81243065198262 241.58578333333335 140.79451406796773 195.04173333333335 216.60694471995035 195.04173333333335C 292.419375371933 195.04173333333335 357.40145878791805 166.22875 433.2138894399007 166.22875C 509.02632009188335 166.22875 574.0084035078685 195.04173333333335 649.8208341598511 195.04173333333335C 725.6332648118337 195.04173333333335 790.6153482278188 190.60896666666667 866.4277788798014 190.60896666666667C 942.240209531784 190.60896666666667 1007.2222929477691 150.71406666666667 1083.0347235997517 150.71406666666667C 1158.8471542517343 150.71406666666667 1223.8292376677196 175.09428333333335 1299.6416683197021 175.09428333333335"
                                                      pathFrom="M -1 265.966L -1 265.966L 216.60694471995035 265.966L 433.2138894399007 265.966L 649.8208341598511 265.966L 866.4277788798014 265.966L 1083.0347235997517 265.966L 1299.6416683197021 265.966"></path>
                                                <g id="SvgjsG1136" class="apexcharts-series-markers-wrap"
                                                   data:realIndex="1">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1203" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker w8cz3gc3x no-pointer-events"
                                                                stroke="#ffffff" fill="#17a2b8" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1128" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1137" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1197" x1="0" y1="0" x2="1299.6416683197021" y2="0"
                                              stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1198" x1="0" y1="0" x2="1299.6416683197021" y2="0"
                                              stroke-dasharray="0" stroke-width="0"
                                              class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1199" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1200" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1201" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1204" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1205" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1121" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                          opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                          fill="#fefefe"></rect>
                                    <g id="SvgjsG1168" class="apexcharts-yaxis" rel="0"
                                       transform="translate(17.383331298828125, 0)">
                                        <g id="SvgjsG1169" class="apexcharts-yaxis-texts-g">
                                            <text id="SvgjsText1170" font-family="Helvetica, Arial, sans-serif"
                                                  x="20" y="31.4" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#373d3f"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1171">120</tspan>
                                                <title>120</title></text>
                                            <text id="SvgjsText1172" font-family="Helvetica, Arial, sans-serif"
                                                  x="20" y="97.89150000000001" text-anchor="end"
                                                  dominant-baseline="auto" font-size="11px" font-weight="400"
                                                  fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1173">90</tspan>
                                                <title>90</title></text>
                                            <text id="SvgjsText1174" font-family="Helvetica, Arial, sans-serif"
                                                  x="20" y="164.383" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#373d3f"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1175">60</tspan>
                                                <title>60</title></text>
                                            <text id="SvgjsText1176" font-family="Helvetica, Arial, sans-serif"
                                                  x="20" y="230.8745" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#373d3f"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1177">30</tspan>
                                                <title>30</title></text>
                                            <text id="SvgjsText1178" font-family="Helvetica, Arial, sans-serif"
                                                  x="20" y="297.366" text-anchor="end" dominant-baseline="auto"
                                                  font-size="11px" font-weight="400" fill="#373d3f"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1179">0</tspan>
                                                <title>0</title></text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1118" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(81, 67, 217);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(23, 162, 184);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                    <div class="apexcharts-zoomin-icon" title="Zoom In">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoomout-icon" title="Zoom Out">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24"
                                             viewBox="0 0 24 24" width="24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-pan-icon" title="Panning">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24"
                                             viewBox="0 0 24 24" width="24">
                                            <defs>
                                                <path d="M0 0h24v24H0z" id="a"></path>
                                            </defs>
                                            <clipPath id="b">
                                                <use overflow="visible" xlink:href="#a"></use>
                                            </clipPath>
                                            <path clip-path="url(#b)"
                                                  d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-reset-icon" title="Reset Zoom">
                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-menu-icon" title="Menu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download
                                            SVG
                                        </div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download
                                            PNG
                                        </div>
                                        <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download
                                            CSV
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 1410px; height: 450px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart END -->
            </div>
            <!-- Booking Chart END -->

            <!-- Booking graph START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="card-header-title">Room Availability</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-3">
                        <!-- Chart -->
                        <div class="col-sm-6 mx-auto" style="position: relative;">
                            <div class="d-flex justify-content-center" id="ChartTrafficRooms"
                                 style="min-height: 296.9px;">
                                <div id="apexcharts1ufog39b"
                                     class="apexcharts-canvas apexcharts1ufog39b apexcharts-theme-light"
                                     style="width: 300px; height: 296.9px;">
                                    <svg id="SvgjsSvg1206" width="300" height="296.9"
                                         xmlns="http://www.w3.org/2000/svg" version="1.1"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent;">
                                        <g id="SvgjsG1208" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(0, 0)">
                                            <defs id="SvgjsDefs1207">
                                                <clipPath id="gridRectMask1ufog39b">
                                                    <rect id="SvgjsRect1210" width="306" height="302" x="-3" y="-1"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask1ufog39b"></clipPath>
                                                <clipPath id="nonForecastMask1ufog39b"></clipPath>
                                                <clipPath id="gridRectMarkerMask1ufog39b">
                                                    <rect id="SvgjsRect1211" width="304" height="304" x="-2" y="-2"
                                                          rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                          stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="SvgjsG1212" class="apexcharts-pie">
                                                <g id="SvgjsG1213" transform="translate(0, 0) scale(1)">
                                                    <circle id="SvgjsCircle1214" r="93.82195121951219" cx="150"
                                                            cy="150" fill="transparent"></circle>
                                                    <g id="SvgjsG1215" class="apexcharts-slices">
                                                        <g id="SvgjsG1216"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="SoldxOut" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1217"
                                                                  d="M 150 5.658536585365852 A 144.34146341463415 144.34146341463415 0 1 1 12.72311064793368 194.6039651880717 L 60.77002192115691 178.9925773722466 A 93.82195121951219 93.82195121951219 0 1 0 150 56.17804878048781 L 150 5.658536585365852 z"
                                                                  fill="rgba(214,41,62,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="2" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                  index="0" j="0" data:angle="252"
                                                                  data:startAngle="0" data:strokeWidth="2"
                                                                  data:value="70"
                                                                  data:pathOrig="M 150 5.658536585365852 A 144.34146341463415 144.34146341463415 0 1 1 12.72311064793368 194.6039651880717 L 60.77002192115691 178.9925773722466 A 93.82195121951219 93.82195121951219 0 1 0 150 56.17804878048781 L 150 5.658536585365852 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                        <g id="SvgjsG1218"
                                                           class="apexcharts-series apexcharts-pie-series"
                                                           seriesName="Available" rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1219"
                                                                  d="M 12.72311064793368 194.6039651880717 A 144.34146341463415 144.34146341463415 0 0 1 149.97480766229054 5.658538783812048 L 149.98362498048886 56.178050209477846 A 93.82195121951219 93.82195121951219 0 0 0 60.77002192115691 178.9925773722466 L 12.72311064793368 194.6039651880717 z"
                                                                  fill="rgba(12,188,135,1)" fill-opacity="1"
                                                                  stroke-opacity="1" stroke-linecap="butt"
                                                                  stroke-width="2" stroke-dasharray="0"
                                                                  class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                  index="0" j="1" data:angle="108"
                                                                  data:startAngle="252" data:strokeWidth="2"
                                                                  data:value="30"
                                                                  data:pathOrig="M 12.72311064793368 194.6039651880717 A 144.34146341463415 144.34146341463415 0 0 1 149.97480766229054 5.658538783812048 L 149.98362498048886 56.178050209477846 A 93.82195121951219 93.82195121951219 0 0 0 60.77002192115691 178.9925773722466 L 12.72311064793368 194.6039651880717 z"
                                                                  stroke="#ffffff"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1220" x1="0" y1="0" x2="300" y2="0" stroke="#b6b6b6"
                                                  stroke-dasharray="0" stroke-width="1"
                                                  class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1221" x1="0" y1="0" x2="300" y2="0"
                                                  stroke-dasharray="0" stroke-width="0"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                        </g>
                                        <g id="SvgjsG1209" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(214, 41, 62);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(12, 188, 135);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 331px; height: 298px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>

                        <!-- Content -->
                        <ul class="list-group list-group-borderless mb-0">
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="h6 fw-light mb-0"><i class="text-success fas fa-circle me-2"></i> Available</span>
                                <span class="h6 fw-light mb-0">73 Rooms</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="h6 fw-light mb-0"><i class="text-danger fas fa-circle me-2"></i> Sold Out</span>
                                <span class="h6 fw-light mb-0">245 Rooms</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Booking graph END -->

            <!-- Rooms START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-header-title">Room Notifications</h5>
                        <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/04.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">18 Nov to 22 Nov</li>
                                        <li class="nav-item"><span class="text-success">Booked</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Deluxe Pool View</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">16 Nov</li>
                                        <li class="nav-item"><span class="text-danger">Booking cancel</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/06.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Luxury Room with Balcony</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">15 Nov to 20 Nov</li>
                                        <li class="nav-item"><span class="text-success">Booked</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Premium Room With Balcony</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">14 Nov to 16 Nov</li>
                                        <li class="nav-item"><span class="text-success">Booked</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Rock Family Suite</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">13 Nov</li>
                                        <li class="nav-item"><span class="text-danger">Booking cancel</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Rooms END -->

            <!-- Upcoming Arrival START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
                        <h5 class="card-header-title">Upcoming Arrivals</h5>
                        <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-3">

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Lori Stevens</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 25A</li>
                                        <li class="nav-item">24Nov - 28Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>

                        <hr><!-- Divider -->

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Dennis Barrett</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 12B</li>
                                        <li class="nav-item">21Nov - 23Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>

                        <hr><!-- Divider -->

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Jacqueline Miller</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 11A</li>
                                        <li class="nav-item">19Nov - 21Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>

                        <hr><!-- Divider -->

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Billy Vasquez</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 05A</li>
                                        <li class="nav-item">14Nov - 18Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>

                        <hr><!-- Divider -->

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Amanda Reed</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 9</li>
                                        <li class="nav-item">11Nov - 12Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>

                        <hr><!-- Divider -->

                        <!-- Arrival item -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Avatar and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="avatar avatar-md flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg"
                                         alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-2 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Dennis Barrett</h6>
                                    <ul class="nav nav-divider small">
                                        <li class="nav-item">Room 10</li>
                                        <li class="nav-item">11Nov - 12Nov</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i
                                    class="fa-solid fa-chevron-right fa-fw"></i></a>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Upcoming Arrival END -->

            <!-- Reviews START -->
            <div class="col-lg-6 col-xxl-4">
                <div class="card shadow h-100">
                    <!-- Card header -->
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
                        <h5 class="card-header-title">Reviews</h5>
                        <a href="#" class="btn btn-link p-0 mb-0">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body p-3">

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
                                    <ul class="list-inline smaller mb-0">
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0">(35 reviews)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/09.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Deluxe Pool View</h6>
                                    <ul class="list-inline smaller mb-0">
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0">(25 reviews)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/01.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Luxury Room with Balcony</h6>
                                    <ul class="list-inline smaller mb-0">
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="far fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0">(18 reviews)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Premium Room With Balcony</h6>
                                    <ul class="list-inline smaller mb-0">
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i
                                                class="far fa-star-half-stroke text-warning"></i></li>
                                        <li class="list-inline-item me-0">(08 reviews)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                        <hr><!-- Divider -->

                        <!-- Rooms item START -->
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Image and info -->
                            <div class="d-sm-flex align-items-center mb-1 mb-sm-0">
                                <!-- Avatar -->
                                <div class="flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px"
                                         alt="">
                                </div>
                                <!-- Info -->
                                <div class="ms-sm-3 mt-2 mt-sm-0">
                                    <h6 class="mb-1">Rock Family Suite</h6>
                                    <ul class="list-inline smaller mb-0">
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i>
                                        </li>
                                        <li class="list-inline-item me-0"><i
                                                class="far fa-star-half-stroke text-warning"></i></li>
                                        <li class="list-inline-item me-0">(11 reviews)</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
                        </div>
                        <!-- Rooms item END -->

                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Reviews END -->
        </div>
        <!-- Widget END -->

    </div>
@endsection
