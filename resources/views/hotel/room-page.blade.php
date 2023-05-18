@extends('layouts.app')

@section('content')
    <section>
        <h2>Luxury Room with Balconyк</h2>
        <p class="fw-bold mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                 viewBox="0 0 16 16">
                <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            Калифорния аьвткщопт
        </p>
    </section>
    <section>
        <div>
            <div
                class="card-header bg-transparent border-bottom d-sm-flex justify-content-sm-between align-items-center p-0 pb-3">
                <h3>Выберите комнату</h3>
                <p>Параметры отбора</p>
            </div>
            <hr/>
            <div>
                <article class="card border bg-transparent p-3">
                    <div class="card-img-overlay">
                        <img src="">
                    </div>
                    <div class="card-body d-flex flex-column p-0 h-100">
                        <h5 class="card-title">Deluxe Pool View with Breakfast</h5>
                        <ul class="nav small nav-divider mb-0">
                            <li class="nav-item mb-0">
                                <i class="fa-regular fa-square me-1"></i>
                                20m2
                            </li>
                            <li class="nav-item mb-0">
                            </li>
                            <li class="nav-item mb-0"></li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                            <div class="d-flex text-success">
                                <h6 class="h5 mb-0 text-success">385</h6>
                                <span class="fw-light">/per night</span>
                            </div>
                            <a class="btn btn-sm btn-dark mb-0">Выбор комнаты</a>
                        </div>
                    </div>
                </article>
                <article class="card border bg-transparent p-3">
                    <div class="card-img-overlay">
                        <img src="">
                    </div>
                    <div class="card-body d-flex flex-column p-0 h-100">
                        <h5 class="card-title">Deluxe Pool View with Breakfast</h5>
                        <ul class="nav small nav-divider mb-0">
                            <li class="nav-item mb-0">
                                <i class="fa-regular fa-square me-1"></i>
                                20m2
                            </li>
                            <li class="nav-item mb-0">
                            </li>
                            <li class="nav-item mb-0"></li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mt-2 mt-md-auto">
                            <div class="d-flex text-success">
                                <h6 class="h5 mb-0 text-success">385</h6>
                                <span class="fw-light">/per night</span>
                            </div>
                            <a class="btn btn-sm btn-dark mb-0">Выбор комнаты</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div>
            <h3>Сводка цен</h3>
            <hr/>
            <div>
                <div class="bg-light py-3 px-4 rounded-3">
                    <p>Дата въезда</p>
                    <p>15.05.2003</p>
                </div>
                <div class="bg-light py-3 px-4 rounded-3">
                    <p>Дата выезда</p>
                    <p>20.05.2003</p>
                </div>
            </div>
            <div>
                <ul class="list-group list-group-borderless mb-3">
                    <li class="list-group-item px-2 d-flex justify-content-between">
                        <span class="h6 fw-light mb-0">3500руб x 2 ночи</span>
                        <span class="h6 fw-light mb-0">7000руб</span>
                    </li>
                    <li class="list-group-item bg-light d-flex justify-content-between rounded-2 px-2 mt-2">
                        <span class="h5 fw-normal mb-0">Итог</span>
                        <span class="h5 fw-normal mb-0">7000руб</span>
                    </li>
                </ul>
            </div>
            <button>Продолжить бронирование</button>
        </div>
    </section>
@endsection
