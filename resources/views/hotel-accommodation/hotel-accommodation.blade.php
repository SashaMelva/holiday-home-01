@extends('layouts.app')

@section('content')

    <!-- =======================
Main Banner START -->
    <section class="pt-4 pt-md-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <!-- Title -->
                    <h1 class="mb-4 display-5">Разместите свою недвижимость на <span
                            class="text-primary">Holiday Home</span></h1>
                    <!-- Info -->
                    <!-- Button -->
                    <a href="{{ route('agent.information.add') }}" class="btn btn-primary-soft mb-4">Добавте
                        объявление
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <!-- Image -->
                <div class="col-lg-5 text-center">
                    <img src="{{ Vite::asset('resources/img/img_1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
