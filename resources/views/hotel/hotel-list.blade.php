@extends('layouts.app')

@section('content')
    <section class="container block-center m-tb-1">
        <div class="content-mini-search rounded-3 bg-black">
            <div class="img-fon-mini container-search">
                <div class="img-fon-mini">
                    <img src="{{ Vite::asset('resources/img/hotel/orva-studio-YC8qqp50BdA-unsplash.jpg') }}"
                         class="img-fon rounded-3" alt="...">
                </div>
                <div class="row my-2 my-xl-5 content-search-text">
                    <h1 class="header-search text-center">Доступные отелеи</h1>
                    @include('inc.main-search-hotel')
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between m-4">
            <button id="support-filters" class="btn btn-lg btn-primary btn-base mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                </svg>
                Фильтр
            </button>
        </div>

        @include('inc.support-filters')
        @include('hotel.hotels')
    </section>
@endsection
