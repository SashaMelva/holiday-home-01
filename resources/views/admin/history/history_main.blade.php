@extends('layouts.admin')

@section('content')
    <div class="m-tb-1 m-4">
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Истоия входа {{ $title }}</h1>
                </div>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <!-- Search -->
            <div class="col-md-6 col-lg-3">
                <form class="rounded position-relative">
                    <input class="form-control bg-transparent" type="search" placeholder="Поиск по логину"
                           aria-label="Search">
                    <button
                        class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset"
                        type="submit">
                        <i class="fas fa-search fs-6"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="card shadow mt-5">
            @include('inc.table_history')
        </div>
    </div>
@endsection
