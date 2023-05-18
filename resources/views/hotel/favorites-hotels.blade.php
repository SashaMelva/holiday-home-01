@extends('layouts.app')

@section('content')
    <div class="container m-tb-1">
        <div class="row">
            <div class="col-12">
                <div class="bg-light rounded-3 position-relative overflow-hidden p-4 p-xl-5">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="mb-3 fs-2">Ваши изобранные отели</h1>
                            <p class="mb-3">Подберите лучший отель для подходящего для вас отдыха</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ Vite::asset('resources/img/img.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container m-tb-1">
        <div class="row">
            <div class="col-12">
                @include('hotel.favorites-hotels-list')
            </div>
        </div>
    </div>
@endsection
