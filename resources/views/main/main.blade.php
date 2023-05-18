@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="bg-black container-search main-fon-img ">
            <div class="main-fon-img ">
                <img src="{{ Vite::asset('resources/img/city/luchshie2.jpg') }}" class="img-fon" alt="...">
            </div>

            <div class="row my-2 my-xl-5 content-search-text w-100">
                <h1 class="header-search text-center m-lr-0">Бронируйте отели с нами легко</h1>
                @include('inc.main-search-hotel')
            </div>


        </div>
{{--        <div class="content-mini-search rounded-3 bg-black">--}}
{{--            <div class="img-fon-mini container-search">--}}
{{--                <div class="main-fon-img">--}}
{{--                    <img src="{{ Vite::asset('resources/img/city/luchshie2.jpg') }}" class="img-fon rounded-3" alt="...">--}}
{{--                </div>--}}

{{--                <div class="row my-2 my-xl-5 content-search-text">--}}
{{--                    @include('inc.main-search-hotel')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        @include('inc.popular-destinations')
    </div>
@endsection
