@extends('layouts.welcome')

@section('content')
    <section>
        <h2>{{ $hotel->full_title }}</h2>
        <p class="fw-bold mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            {{ $hotel->city }} {{ $hotel->address }}
            @for($i = 0; $i < $hotel->star; $i++)
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
            @endfor
        </p>
        <p>Колличество номеров: {{ $hotel->number_rooms }}</p>
    </section>
    <section>
        <h3>Об этом отеле</h3>
        <hr />
        <div class="card-body pt-4 p-0">

        </div>
    </section>
    <section>
        <h3>Удобства</h3>
        <hr />
        <div class="card-body pt-4 p-0">
            @foreach($servicesList as $list)
                <p>{{ $list->service->name }}</p>
            @endforeach
        </div>
    </section>
    <section>
        <h3>Варианты номеров</h3>
        <hr />
        <div class="card-body pt-4 p-0">

        </div>
    </section>
    <section>
        <h3>Отзывы клиентов</h3>
        <hr />
        <p>Основные моменты</p>
        <div class="card-body pt-4 p-0">

        </div>
    </section>
@endsection
