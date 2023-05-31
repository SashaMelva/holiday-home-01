<div class="card-body" id="content-table">
    <!-- Table head -->
    <div class="bg-light rounded p-3 d-none d-lg-block">
        <div class="row row-cols-7 g-4">
            <div class="col"><h6 class="mb-0">Логин</h6></div>
            <div class="col"><h6 class="mb-0">Email</h6></div>
            <div class="col"><h6 class="mb-0">Дата и время входа в систему</h6></div>
        </div>
    </div>

    @foreach($historyUsers as $user)
        <!-- Table data -->
        <article  class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
            <!-- Data item -->
            <div class="col">
                <div class="d-flex align-items-center">
                    <!-- Info -->
                    <div class="ms-2">
                        <h6 class="mb-0 fw-light">{{ $user->name }}</h6>
                    </div>
                </div>
            </div>

            <!-- Data item -->
            <div class="col">
                <h6 class="mb-0 fw-normal">{{ $user->email }}</h6>
            </div>

            <!-- Data item -->
            <div class="col">
                <h6 class="mb-0 fw-normal">{{ $user->time_login }}</h6>
            </div>
        </article>
    @endforeach
</div>
