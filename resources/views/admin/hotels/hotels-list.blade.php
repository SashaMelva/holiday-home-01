@extends('layouts.admin')

@section('content')
    <nav class="navbar top-bar navbar-light py-0 py-xl-3">
        <div class="container-fluid p-0">
            <div class="d-flex align-items-center w-100">
                <!-- Search -->
                <div class="col-md-6 col-lg-3">
                    <input id="inputSearch" class="form-control bg-transparent" type="search"
                           placeholder="Поиск по названию отеля"
                           aria-label="Search">
                    <button
                        class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                    {{--                    <form method="POST">--}}
                    {{--                        @csrf--}}
                    {{--                        <label for="status_id">Статус отеля</label>--}}
                    {{--                        <select id="status_id" name="status_id">--}}
                    {{--                            <option value="0" selected>Все</option>--}}
                    {{--                            @foreach($statuses as $status)--}}
                    {{--                                <option value="{{ $status->id }}">{{ $status->title }}</option>--}}
                    {{--                            @endforeach--}}
                    {{--                        </select>--}}
                    {{--                        <button>Поиск</button>--}}
                    {{--                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
                    {{--                    </form>--}}
                    <button
                        class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                        type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </nav>
    <div class="page-content-wrapper p-xxl-4 ">
        <!-- Title -->
        <h5 class="mb-3">Заявки на регистрацию отелей</h5>

        <div id="content-table" class="shadow mt-5">
            <!-- Table head -->
            <div class="bg-light rounded p-3 d-none d-lg-block ">
                <div class="row row-cols-5 justify-content-between g-4">
                    <div class="col"><h6 class="mb-0">Изображение отеля</h6></div>
                    <div class="col"><h6 class="mb-0">Название отеля</h6></div>
                    <div class="col"><h6 class="mb-0">Адресс</h6></div>
                    <div class="col"><h6 class="mb-0">Статус</h6></div>
                    <div class="col"><h6 class="mb-0">Действие</h6></div>
                </div>
            </div>
            <hr>
            @foreach($hotels as $hotel)
                <!-- Table data -->
                <article
                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-2 g-sm-4 align-items-md-center justify-content-between px-2 py-4">


                    <div class="col">
                        <div class="w-80px flex-shrink-0">
                            @if(isset($hotel->img[0]->img_url))
                                <img class="rounded" src="{{ Storage::url($hotel->img[0]->img_url) }}"
                                     alt="{{ $hotel->img[0]->description }}">
                            @else
                                <img class="rounded" src="{{ Vite::asset('resources/img/logo/img.png') }}"
                                     alt="hotel img">
                            @endif
                        </div>
                    </div>
                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 ms-2"><span>{{ $hotel->short_title }}</span></h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        <h6 class="mb-0 fw-normal">@if(isset($hotel->city->title))
                                {{ $hotel->city->title }},
                            @endif{{ $hotel->address }}</h6>
                    </div>

                    <!-- Data item -->
                    <div class="col">
                        @if($hotel->status->id == 1)
                            <span class="badge text-bg-warning">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                        @if($hotel->status->id == 2)
                            <span class="badge text-bg-success">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                        @if($hotel->status->id == 3)
                            <span class="badge text-bg-danger">
                                    {{ $hotel->status->title }}
                                </span>
                        @endif
                    </div>
                    <!-- Data item -->
                    <div class="col"><a href="{{ route('admin.hotel.info', $hotel->id) }}"
                                        class="btn btn-sm btn-light mb-0">Просмотреть</a></div>

                </article>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener('keyup', search);

        function search() {
            let input = document.querySelector("#inputSearch");
            let filter = input.value.toUpperCase();
            let div = document.querySelector("#content-table");
            let article = div.getElementsByTagName("article");

            for (let i = 0; i < article.length; i++) {
                let span = article[i].getElementsByTagName("h6")[0];
                if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    article[i].style.display = "";
                } else {
                    article[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
