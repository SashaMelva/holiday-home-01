@extends('layouts.app')

@section('content')
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fs-2 mb-2">Добавте новое объявление</h1>
                <p class="mb-0">Заполните все поля необходимыми доставерными данными</p>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('punkt')
    </div>
</section>
@endsection
