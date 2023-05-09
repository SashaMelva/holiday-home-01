@extends('layouts.welcome')

@section('content')
    <section class="container block-center">
        <div class="content-search content-mini-search rounded-3">
            <div class="main-fon-img img-fon-mini">
                <img src="{{ Vite::asset('resources/img/city/luchshie2.jpg') }}" class="img-fon rounded-3" alt="...">
            </div>
            <div class="row my-2 my-xl-5">
                <h1 class="header-search text-center">Более 150 доступных отелей</h1>
                @include('inc.main-search-hotel')
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-primary-soft btn-primary-check mb-0">
                <i class="bi fa-fe bi-sliders me-2"></i>
                Фильтр
            </button>
            <ul class="nav nav-pills nav-pills-dark" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded-start rounded-0 mb-0">
                        <i class="bi fa-fw bi-list-ul"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-start rounded-0 mb-0">
                        <i class="bi fa-fw bi-grid-fill"></i>
                    </a>
                </li>
            </ul>
        </div>
        @include('inc.support-filters')
        @include('inc.list-hotels')

        <nav aria-label="Page navigation example">
            <ul class="pagination content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>


    </section>
@endsection
