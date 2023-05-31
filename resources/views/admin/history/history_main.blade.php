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
                    <input id="inputSearch" class="form-control bg-transparent" type="search" placeholder="Поиск по логину"
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
{{--            @if(isset($historyUsers[0]->id))--}}
{{--            @else--}}
                @include('inc.table_history')
{{--            @endif--}}
        </div>
    </div>
    <script>

        document.addEventListener('keyup', search);

        function search() {
            let input = document.querySelector("#inputSearch");
            let filter = input.value.toUpperCase();
            let div = document.querySelector("#content-table");
            let article = div.getElementsByTagName("article");

            for (let i = 0; i < article.length; i++) {
                let span = article[i].getElementsByTagName("h6")[0];
                if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    article[i].style.display = "";
                } else {
                    article[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
