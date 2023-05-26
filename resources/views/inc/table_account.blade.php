
<!-- Card body START -->
<div class="card-body">
    <!-- Table head -->
    <div class="bg-light rounded p-3 d-none d-lg-block">
        <div class="row row-cols-7 g-4">
            <div class="col"><h6 class="mb-0">Логин</h6></div>
            <div class="col"><h6 class="mb-0">Email</h6></div>
            <div class="col"><h6 class="mb-0">Статус</h6></div>
            <div class="col"><h6 class="mb-0">Дата регистрации</h6></div>
            <div class="col"><h6 class="mb-0">Просмотр</h6></div>
        </div>
    </div>

    @foreach($users as $user)
    <!-- Table data -->
    <div class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
        <!-- Data item -->
        <div class="col">
            <div class="d-flex align-items-center">
                <!-- Info -->
                <div class="ms-2">
                    <h6 class="mb-0 fw-light">{{ $user->user->name }}</h6>
                </div>
            </div>
        </div>

        <!-- Data item -->
        <div class="col">
            <h6 class="mb-0 fw-normal">{{ $user->user->email }}</h6>
        </div>

        <!-- Data item -->
        <div class="col">
            <h6 class="mb-0 fw-normal">22 Dec 2022</h6>
        </div>

        <!-- Data item -->
        <div class="col">
            <h6 class="mb-0 fw-normal">{{ $user->user->created_at }}</h6>
        </div>
        <!-- Data item -->
        <div class="col"><a href="{{ route($destroy,  $user->user->id) }}" class="btn btn-sm btn-light mb-0">Удалить</a></div>
    </div>
    @endforeach
</div>
<!-- Card body END -->

<!-- Card footer START -->
<div class="card-footer pt-0">
    <!-- Pagination and content -->
    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
        <!-- Content -->
        <p class="mb-sm-0 text-center text-sm-start">Показано с 1 по 8 из 20 записей</p>
        <!-- Pagination -->
        <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
            <ul class="pagination pagination-sm pagination-primary-soft mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                <li class="page-item"><a class="page-link" href="#">15</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- Card footer END -->

