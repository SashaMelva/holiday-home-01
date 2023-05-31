@extends('layouts.admin')

@section('content')
    <div class="m-tb-1 m-4">
        <div class="row">
            <div class="col-12 mb-4 mb-sm-5">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-3 mb-sm-0">Список {{ $title }}</h1>
                    <div class="d-grid"><a href="{{ route($route) }}" class="btn btn-primary mb-0"><i class="bi bi-filetype-pdf me-2"></i>Добавить
                            новый</a></div>
                </div>
            </div>
        </div>
        <div class="row g-4 align-items-center">
            <!-- Tabs -->
            <div class="col-lg-6">
                <ul class="nav nav-pills-shadow nav-responsive" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1" aria-selected="true"
                           role="tab">Все</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3" aria-selected="false" tabindex="-1"
                           role="tab">Доступные</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2" aria-selected="false" tabindex="-1"
                           role="tab">Заблокированные</a>
                    </li>
                </ul>
            </div>

            <!-- Search -->
            <div class="col-md-6 col-lg-3">
                    <input id="inputSearch" class="form-control bg-transparent" type="search" placeholder="Поиск по логину"
                           aria-label="Search">
                    <button
                        class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
            </div>
        </div>
        <div class="card shadow mt-5">
            @include('inc.table_account')
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
