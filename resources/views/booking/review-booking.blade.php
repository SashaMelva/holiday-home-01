@extends('layouts.welcome')

@section('content')
    <div class="container">
    <section class="card bg-light overflow-hidden px-sm-5">
        <div class="row align-items-center g-4">
            <div class="col-sm-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dots mb-0">
                        <li class="breadcrumb-item">
                            <a>
                                <i></i>
                                Домашняя
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>
                                <i></i>
                                Информация об отеле
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a>
                                <i></i>
                                Бронирование
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="m-0 h2 card-title">Подтвердите бронирование</h1>
            </div>
            <div class="col-sm-3 text-end d-none d-sm-block">
                <img src="">
            </div>
        </div>
    </section>
        <section class="row g-4 g-lg-5">
            <div class="col-xl-8">
                <div class="card shadow">
                    <div class="card-header p-4 border-bottom">
                        <h3 class="mb-0">
                            <i></i>
                            Информация отеля
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4"></div>
        </section>
    </div>
@endsection
