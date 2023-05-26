@extends('layouts.admin')

@section('content')
    <div class="m-tb-1 m-4">
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Список Клиентов</h1>
                    <div class="d-grid"><a href="{{ route($route) }}" class="btn btn-primary mb-0"><i class="bi bi-filetype-pdf me-2"></i>Добавить
                            новый</a></div>
                </div>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <!-- Tabs -->
            <div class="col-lg-6">
                <ul class="nav nav-pills-shadow nav-responsive" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1" aria-selected="true"
                           role="tab">Все</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1"
                           role="tab">Доступные</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1"
                           role="tab">Заблокированные</a>
                    </li>
                </ul>
            </div>

            <!-- Search -->
            <div class="col-md-6 col-lg-3">
                <form class="rounded position-relative">
                    <input class="form-control bg-transparent" type="search" placeholder="Поиск по логину"
                           aria-label="Search">
                    <button
                        class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                        type="submit">
                        <i class="fas fa-search fs-6"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="card shadow mt-5">
            <div class="card-body">
                <!-- Table head -->
                <div class="bg-light rounded p-3 d-none d-lg-block">
                    <div class="row row-cols-7 g-4">
                        <div class="col"><h6 class="mb-0">Логин</h6></div>
                        <div class="col"><h6 class="mb-0">Email</h6></div>
                        <div class="col"><h6 class="mb-0">Статус</h6></div>
                        <div class="col"><h6 class="mb-0">Дата регистрации</h6></div>
                        <div class="col"><h6 class="mb-0">Просмотр</h6></div>
                    </div>
                </div>

                @foreach($users as $user)
                    <!-- Table data -->
                    <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
                        <!-- Data item -->
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <!-- Info -->
                                <div class="ms-2">
                                    <h6 class="mb-0 fw-light">{{ $user->name }}</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $user->email }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">22 Dec 2022</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col">
                            <h6 class="mb-0 fw-normal">{{ $user->created_at }}</h6>
                        </div>

                        <!-- Data item -->
                        <div class="col"><a href="{{ route($destroy,  $user->user->id) }}" class="btn btn-sm btn-light mb-0">View</a></div>
                    </div>
                @endforeach
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer pt-0">
                <!-- Pagination and content -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-sm-0 text-center text-sm-start">Показано с 1 по 8 из 20 записей</p>
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

@endsection
