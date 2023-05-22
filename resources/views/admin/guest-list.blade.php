@extends('layouts.admin')

@section('content')
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
                    <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                        <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                    </button>
                </div>
                <!-- Toggler for sidebar END -->

                <!-- Top bar left -->
                <div class="navbar-expand-lg ms-auto ms-xl-0">
                    <!-- Toggler for menubar START -->
                    <button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-search"></i>
                    </button>
                    <!-- Toggler for menubar END -->

                    <!-- Topbar menu START -->
                    <div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
                        <!-- Top search START -->
                        <div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
                            <div class="nav-item w-100">
                                <form class="position-relative">
                                    <input class="form-control bg-light pe-5" type="search" placeholder="Search" aria-label="Search">
                                    <button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
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
                        <button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                <use href="#"></use>
                            </svg>
                        </button>

                        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                                    <svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                        <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
                                        <use href="#"></use>
                                    </svg>Light
                                </button>
                            </li>
                            <li class="mb-1">
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
                                        <use href="#"></use>
                                    </svg>Dark
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                        <use href="#"></use>
                                    </svg>Auto
                                </button>
                            </li>
                        </ul>
                    </li>
                    <!-- Dark mode options END-->

                    <!-- Notification dropdown START -->
                    <li class="nav-item dropdown ms-3">
                        <!-- Notification button -->
                        <a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi bi-bell fa-fw"></i>
                        </a>
                        <!-- Notification dote -->
                        <span class="notif-badge animation-blink"></span>

                        <!-- Notification dropdown menu START -->
                        <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
                            <div class="card bg-transparent">
                                <!-- Card header -->
                                <div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
                                    <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                    <a class="small" href="#">Clear all</a>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush list-unstyled p-2">
                                        <!-- Notification item -->
                                        <li>
                                            <a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
                                                <h6 class="mb-2">New! Booking flights from New York ✈️</h6>
                                                <p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
                                                <span>Wednesday</span>
                                            </a>
                                        </li>
                                        <!-- Notification item -->
                                        <li>
                                            <a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
                                                <h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
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
                        <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="avatar-img rounded-2" src="assets/images/avatar/01.jpg" alt="avatar">
                        </a>

                        <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                            <!-- Profile info -->
                            <li class="px-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar me-3">
                                        <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
                                    </div>
                                    <div>
                                        <a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
                                        <p class="small m-0">example@gmail.com</p>
                                    </div>
                                </div>
                            </li>

                            <!-- Links -->
                            <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
                            <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
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
                    <h1 class="h3 mb-3 mb-sm-0">Guest List</h1>
                    <div class="d-grid"><a href="#" class="btn btn-primary mb-0"><i class="bi bi-filetype-pdf me-2"></i>Generate Report</a>	</div>
                </div>
            </div>
        </div>

        <!-- Filters START -->
        <div class="row g-4 align-items-center">
            <!-- Tabs -->
            <div class="col-lg-6">
                <ul class="nav nav-pills-shadow nav-responsive" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">All Guests</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2" aria-selected="false" role="tab" tabindex="-1">Booked</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false" role="tab" tabindex="-1">Canceled</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-4" aria-selected="false" role="tab" tabindex="-1">Pending</a>
                    </li>
                </ul>
            </div>

            <!-- Search -->
            <div class="col-md-6 col-lg-3">
                <form class="rounded position-relative">
                    <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                    <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                        <i class="fas fa-search fs-6"></i>
                    </button>
                </form>
            </div>

            <!-- Select -->
            <div class="col-md-6 col-lg-3">
                <form>
                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select js-choice choices__input" aria-label=".form-select-sm" tabindex="-1" data-choice="active" hidden=""><option value="" data-custom-properties="[object Object]">Sort by hotels</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Sort by hotels</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--j1i1-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Sort by hotels</div><div id="choices--j1i1-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Pride moon Village Resort &amp; Spa" data-select-text="Press to select" data-choice-selectable="">Pride moon Village Resort &amp; Spa</div><div id="choices--j1i1-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Courtyard by Marriott New York" data-select-text="Press to select" data-choice-selectable="">Courtyard by Marriott New York</div><div id="choices--j1i1-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Park Plaza Lodge Hotel" data-select-text="Press to select" data-choice-selectable="">Park Plaza Lodge Hotel</div><div id="choices--j1i1-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Royal Beach Resort" data-select-text="Press to select" data-choice-selectable="">Royal Beach Resort</div></div></div></div>
                </form>
            </div>
        </div>
        <!-- Filters END -->

        <!-- Guest list START -->
        <div class="card shadow mt-5">
            <!-- Card body START -->
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-7 g-4">
                        <div class="col"><h6 class="mb-0">Guest</h6></div>
                        <div class="col"><h6 class="mb-0">Booking Date</h6></div>
                        <div class="col"><h6 class="mb-0">Check-In</h6></div>
                        <div class="col"><h6 class="mb-0">Check-Out</h6></div>
                        <div class="col"><h6 class="mb-0">Room No</h6></div>
                        <div class="col"><h6 class="mb-0">Status</h6></div>
                        <div class="col"><h6 class="mb-0">Action</h6></div>
                    </div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Lori Stevens</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">18 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">22 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G102</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Carolyn Ortiz</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">01 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">16 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">18 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G103</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Billy Vasquez</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">29 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">10 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">14 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G105</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Samuel Bishop</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">14 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">07 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">09 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G102</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-orange bg-opacity-10 text-orange">Pending</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Amanda Reed</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">10 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">05 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G102</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Jacqueline Miller</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">05 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">27 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">01 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G105</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Joan Wallace</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">05 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">23 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">26 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">F105</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Dennis Stevens</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">14 Nov 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">07 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">09 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G102</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-danger bg-opacity-10 text-danger">Canceled</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>

                <!-- Table data -->
                <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booked by:</small>
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar avatar-xs flex-shrink-0">
                                <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="avatar">
                            </div>
                            <!-- Info -->
                            <div class="ms-2">
                                <h6 class="mb-0 fw-light">Louis Ferguson</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Booking date:</small>
                        <h6 class="mb-0 fw-normal">02 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-in:</small>
                        <h6 class="mb-0 fw-normal">18 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Check-out:</small>
                        <h6 class="mb-0 fw-normal">22 Dec 2022</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Room no:</small>
                        <h6 class="mb-0 fw-normal">G102</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <small class="d-block d-lg-none">Payment:</small>
                        <div class="badge bg-success bg-opacity-10 text-success">Booked</div>
                    </div>

                    <!-- Data item -->
                    <div class="col"><a href="admin-guest-detail.html" class="btn btn-sm btn-light mb-0">View</a></div>
                </div>
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer pt-0">
                <!-- Pagination and content -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Guest list END -->
    </div>
    <!-- Page main content END -->

@endsection
