@extends('layouts.welcome')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="content-search">
            <div class="main-fon-img">
                <img src="{{ Vite::asset('resources/img/city/luchshie2.jpg') }}" class="img-fon" alt="...">
            </div>
            <div class="search-container">
                @include('inc.main-search-hotel')
            </div>
        </div>

        @include('inc.popular-destinations')
    </div>
@endsection
