@extends('layouts.agent')

@section('content')
    <section>
        <div class="container vstack gap-4">
            <!-- Title START -->
            <div class="row">
                <div class="col-12">
                    <h1 class="fs-4 mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        </svg>
                        Бронрования
                    </h1>
                </div>
            </div>
            <!-- Title END -->

            <!-- Booking table START -->
            <div class="row">
                <div class="col-12">
                    <div class="card border">
                        <!-- Card header START -->
                        <div class="card-header border-bottom">
                            <h5 class="card-header-title">Бронирования<span
                                    class="badge bg-primary bg-opacity-10 text-primary ms-2">{{ count($bookings) }} бронирований</span>
                            </h5>
                        </div>
                        <!-- Card header END -->

                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between mb-3">
                                <!-- Search -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                        <input id="inputSearch" class="form-control pe-5"
                                               placeholder="Писк по названию номера"
                                               aria-label="Search">
                                        <button
                                            class="btn border-0 px-3 py-0 position-absolute top-50 end-0 translate-middle-y"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                {{--                                <!-- Select option -->--}}
                                {{--                                <div class="col-md-3">--}}
                                {{--                                    <!-- Short by filter -->--}}
                                {{--                                    <form>--}}
                                {{--                                        <select name="status_id" class="form-control-lg base-input" type="text">--}}
                                {{--                                            @foreach($statusBookings as $statusBooking)--}}
                                {{--                                                <option--}}
                                {{--                                                    name="{{ $statusBooking->id }}">{{ $statusBooking->title }}</option>--}}
                                {{--                                            @endforeach--}}
                                {{--                                        </select>--}}
                                {{--                                    </form>--}}
                                {{--                                </div>--}}
                            </div>
                            <!-- Search and select END -->

                            <!-- Hotel room list START -->
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                    <!-- Table head -->
                                    <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="border-0 rounded-start">ID</th>
                                        <th scope="col" class="border-0">Название номера</th>
                                        <th scope="col" class="border-0">Почта клиента</th>
                                        <th scope="col" class="border-0">Дата</th>
                                        <th scope="col" class="border-0">Дата бронироания</th>
                                        <th scope="col" class="border-0">Статус</th>
                                    </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody id="content-table" class="border-top-0">
                                    <!-- Table item -->
                                    @if(count($bookings) > 0)
                                        @foreach($bookings as $booking)
                                            <tr>
                                                <td><h6 class="mb-0">{{ $booking->id }}</h6></td>
                                                <td><h5 class="mb-0"><a href="#">{{ $booking->room->title }}</a></h5>
                                                </td>
                                                <td> {{ $booking->user->email }}</td>
                                                <td><h6 class="mb-0 fw-light">{{ $booking->arrival_date }}
                                                        / {{ $booking->date_departure }}</h6></td>
                                                <td><h6 class="mb-0 fw-light">{{ $booking->created_at }}</h6></td>
                                                <td>

                                                    @if($booking->status->id == 1)
                                                        <span class="badge text-bg-warning">
                                                            {{ $booking->status->title }}
                                                        </span>
                                                    @endif
                                                    @if($booking->status->id == 2)
                                                        <span class="badge text-bg-info">
                                                            {{ $booking->status->title }}
                                                        </span>
                                                    @endif
                                                    @if($booking->status->id == 3)
                                                        <span class="badge text-bg-success">
                                                            {{ $booking->status->title }}
                                                        </span>
                                                    @endif
                                                    @if($booking->status->id == 4)
                                                        <span class="badge text-bg-danger">
                                                            {{ $booking->status->title }}
                                                        </span>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Hotel room list END -->
                        </div>
                        <!-- Card body END -->

                        <!-- Card footer START -->
                        {{--                        <div class="card-footer pt-0">--}}
                        {{--                            <!-- Pagination and content -->--}}
                        {{--                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">--}}
                        {{--                                <!-- Content -->--}}
                        {{--                                <p class="mb-sm-0 text-center text-sm-start">Показано с 1 по 8 из 20 записей</p>--}}
                        {{--                                <!-- Pagination -->--}}
                        {{--                                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">--}}
                        {{--                                    <ul class="pagination pagination-sm pagination-primary-soft mb-0">--}}
                        {{--                                        <li class="page-item disabled">--}}
                        {{--                                            <a class="page-link" href="#" tabindex="-1">Prev</a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                        {{--                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>--}}
                        {{--                                        <li class="page-item disabled"><a class="page-link" href="#">..</a></li>--}}
                        {{--                                        <li class="page-item"><a class="page-link" href="#">15</a></li>--}}
                        {{--                                        <li class="page-item">--}}
                        {{--                                            <a class="page-link" href="#">Next</a>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </nav>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <!-- Card footer END -->
                    </div>
                </div>
            </div>
            <!-- Booking table END -->
        </div>
    </section>
    <script>
        document.addEventListener('keyup', search);

        function search() {
            let input = document.querySelector("#inputSearch");
            let filter = input.value.toUpperCase();
            let div = document.querySelector("#content-table");
            let article = div.getElementsByTagName("tr");

            for (let i = 0; i < article.length; i++) {
                let span = article[i].getElementsByTagName("h5")[0];
                if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    article[i].style.display = "";
                } else {
                    article[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
