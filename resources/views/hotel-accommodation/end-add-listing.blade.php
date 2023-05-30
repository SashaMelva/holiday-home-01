@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center mx-auto">
                <!-- SVG decoration START -->
                <img src="{{ Vite::asset('resources/img/img_6.png') }}" class="h-300px my-4" alt="">
                <!-- SVG decoration END -->

                <!-- Title -->
                <h1 class="fs-3">Ваше объявление было успешно отправлено. 🎉</h1>
                <!-- Info -->
                <p>Мы рассмотрим ваш отелтеениинекоторого времени. Вы имеете доступ ф личный кабинет и если тель будет принят, то в сможете иметь к нему доступ</p>

                <!-- Buttons -->
                <a href="/" class="btn btn-light mb-5">Вернуться на домашную страницу</a>
            </div>

        </div>
    </div>
@endsection
