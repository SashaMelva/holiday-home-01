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
        <div class="col-12 mb-5">
            <div class="d-sm-flex justify-content-between align-items-center">
                <h1 class="h3 mb-2 mb-sm-0">Booking</h1>
                <div class="d-grid"><a href="#" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> Add New Room</a></div>
            </div>
        </div>
    </div>

    <!-- Counter START -->
    <div class="row g-4 mb-5">
        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body shadow p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Number -->
                    <div class="me-2">
                        <span>New Booked Rooms</span>
                        <h3 class="mb-0 mt-2">54</h3>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle flex-shrink-0 bg-primary bg-opacity-10 text-primary mb-0">
                        <i class="bi bi-door-open fa-fw"></i>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="progress progress-xs bg-primary bg-opacity-10 mb-2">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <span><span class="text-primary">16 new rooms booked</span> today</span>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body shadow p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Number -->
                    <div class="me-2">
                        <span>Cancelled Rooms</span>
                        <h3 class="mb-0 mt-2">12</h3>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle flex-shrink-0 bg-danger bg-opacity-10 text-danger mb-0">
                        <i class="bi bi-x-circle fa-fw"></i>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="progress progress-xs bg-danger bg-opacity-10 mb-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <span><span class="text-danger">2 canceled rooms</span> today</span>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body shadow p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Number -->
                    <div class="me-2">
                        <span>Check-in</span>
                        <h3 class="mb-0 mt-2">20</h3>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle flex-shrink-0 bg-success bg-opacity-10 text-success mb-0">
                        <i class="bi bi-box-arrow-in-right fa-fw"></i>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="progress progress-xs bg-success bg-opacity-10 mb-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <span><span class="text-success">45 reservation</span> incoming</span>
            </div>
        </div>

        <!-- Counter item -->
        <div class="col-md-6 col-xxl-3">
            <div class="card card-body shadow p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Number -->
                    <div class="me-2">
                        <span>Check-out</span>
                        <h3 class="mb-0 mt-2">28</h3>
                    </div>
                    <!-- Icon -->
                    <div class="icon-lg rounded-circle flex-shrink-0 bg-orange bg-opacity-10 text-orange mb-0">
                        <i class="bi bi-box-arrow-right fa-fw"></i>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="progress progress-xs bg-orange bg-opacity-10 mb-2">
                    <div class="progress-bar bg-orange" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <span><span class="text-orange">30 reservation</span> outgoing</span>
            </div>
        </div>
    </div>
    <!-- Counter END -->

    <!-- Tabs and search START -->
    <div class="row g-4 justify-content-between align-items-center">
        <div class="col-lg-5">
            <!-- Tabs -->
            <ul class="nav nav-pills-shadow nav-responsive" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link mb-0 me-sm-2 active" data-bs-toggle="tab" href="#tab-1" aria-selected="true" role="tab">All Status</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link mb-0 me-sm-2" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1" role="tab">Available</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1" role="tab">Sold Out</a>
                </li>
            </ul>
        </div>

        <div class="col-lg-6 col-xxl-5">
            <div class="d-sm-flex gap-4 justify-content-between justify-content-lg-end">
                <!-- Search -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="fas fa-search fs-6"></i>
                        </button>
                    </form>
                </div>
                <!-- Tabs -->
                <div class="d-flex justify-content-end mt-2 mt-sm-0">
                    <ul class="nav nav-pills nav-pills-dark" id="room-pills-tab" role="tablist">
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-start rounded-0 active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true"><i class="bi fa-fw bi-grid-fill"></i></button>
                        </li>
                        <!-- Tab item -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-end rounded-0" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false" tabindex="-1"><i class="bi fa-fw bi-list-ul"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs and search END -->

    <!-- Tab content START -->
    <div class="tab-content mt-5" id="myTabContent">
        <!-- Content item START -->
        <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="#grid-tab">
            <!-- Rooms START -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xxl-5 g-4">
                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/02.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.5</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction1">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Pool View with Breakfast</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Ground Floor: G5
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$1500</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/03.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction2">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Premium Room With Balcony</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>First Floor: F3
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Single Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$750</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/04.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.2</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction3">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Pool View</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Ground Floor: G3
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$895</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/05.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction4">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Superior Room</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>First Floor: F5
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>King Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$750</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/06.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.0</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction5" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction5">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Studio Suite King</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Fifth Floor: Ft3
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$1458</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/08.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction6" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction6">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Rock Family Suite</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Second Floor: S4
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Single Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$1020</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/09.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction7" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction7">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Luxury Room with Balcony</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Third Floor: T2
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$847</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/01.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>3.9</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction8" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction8">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Premium Room With Balcony</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Third Floor: T4
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Family Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$995</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/11.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.8</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction9" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction9">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Deluxe Room Twin Bed With Balcony</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Fifth Floor: Ft1
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>Double Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$1650</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>

                <!-- Room item -->
                <div class="col">
                    <div class="card shadow h-100">
                        <!-- Overlay item -->
                        <div class="position-relative">
                            <!-- Image -->
                            <img src="assets/images/category/hotel/4by3/12.jpg" class="card-img-top" alt="Card image">
                            <!-- Overlay -->
                            <div class="card-img-overlay d-flex flex-column p-3">
                                <!-- Card overlay top -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="badge text-bg-dark"><i class="bi fa-fw bi-star-fill me-2 text-warning"></i>4.6</div>
                                    <!-- Buttons -->
                                    <div class="list-inline-item dropdown">
                                        <!-- Dropdown button -->
                                        <a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <!-- dropdown items -->
                                        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded small" aria-labelledby="dropdownAction10">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body px-3">
                            <!-- Title -->
                            <h5 class="card-title mb-1"><a href="admin-booking-detail.html">Rock Family Suite</a></h5>
                            <ul class="list-group list-group-borderless small mt-2 mb-0">
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-building fa-fw me-2"></i>Second Floor: S4
                                </li>
                                <li class="list-group-item pb-0">
                                    <i class="fa-solid fa-bed fa-fw me-2"></i>King Bed
                                </li>
                            </ul>
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START-->
                        <div class="card-footer pt-0">
                            <!-- Price -->
                            <div class="hstack gap-2 mb-2">
                                <h6 class="fw-normal mb-0">$1420</h6>
                                <small>/per person</small>
                            </div>
                            <a href="admin-booking-detail.html" class="btn btn-sm btn-primary-soft mb-0 w-100">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rooms END -->

            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4">
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
            <!-- Pagination END -->
        </div>
        <!-- Content item END -->

        <!-- Content item START -->
        <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="#list-tab">
            <div class="card shadow">

                <!-- Card body START -->
                <div class="card-body">
                    <!-- Table head -->
                    <div class="bg-light rounded p-3 d-none d-xxl-block">
                        <div class="row row-cols-6 g-4">
                            <div class="col"><h6 class="mb-0">Room Name</h6></div>
                            <div class="col"><h6 class="mb-0">Bed Type</h6></div>
                            <div class="col"><h6 class="mb-0">Room Floor</h6></div>
                            <div class="col"><h6 class="mb-0">Amount</h6></div>
                            <div class="col"><h6 class="mb-0">Rating</h6></div>
                            <div class="col"><h6 class="mb-0">Action</h6></div>
                        </div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/01.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Deluxe Pool View with Breakfast</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">King Size</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">Ground Floor: G5</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$1025</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/02.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Premium Room With Balcony</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">Single Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">First Floor: F3</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$750</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/03.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Deluxe Pool View</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">Family Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">Ground Floor: G3</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$895</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/04.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Superior Room</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">King Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">First Floor: F5</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$750</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/05.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Studio Suite King</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">Double Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">Fifth Floor: Ft3</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$1458</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/06.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Luxury Room with Balcony</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">Family Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">Third Floor: T2</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$847</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>

                    <!-- Table data -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-6 g-2 g-sm-4 align-items-md-center border-bottom px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room name:</small>
                            <div class="d-flex align-items-center">
                                <!-- Image -->
                                <div class="w-80px flex-shrink-0">
                                    <img src="assets/images/category/hotel/4by3/07.jpg" class="rounded" alt="">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-0 ms-2">Deluxe Room Twin Bed With Balcony</h6>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Bed Type:</small>
                            <h6 class="mb-0 fw-normal">Double Bed</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Room Floor:</small>
                            <h6 class="mb-0 fw-normal">Fifth Floor: Ft1</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Amount:</small>
                            <h6 class="text-success mb-0">$1650</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <small class="d-block d-xxl-none">Payment:</small>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="#" class="btn btn-sm btn-light mb-0">View</a></div>
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
            </div>
        </div>
    </div>
</div>
@endsection
