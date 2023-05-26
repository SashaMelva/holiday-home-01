@extends('layouts.admin')

@section('content')
    <div class="m-tb-1 m-4">
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Список {{ $title }}</h1>
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
            @include('inc.table_account')
        </div>
    </div>
@endsection
