<!-- Card body START -->
<div id="content-table" class="card-body">
    <!-- Table head -->
    <div class="bg-light rounded p-3 d-none d-lg-block">
        <div class="row row-cols-7 g-4">
            <div class="col"><h6 class="mb-0">Логин</h6></div>
            <div class="col"><h6 class="mb-0">Email</h6></div>
            <div class="col"><h6 class="mb-0">Дата регистрации</h6></div>
            <div class="col"><h6 class="mb-0">Действие</h6></div>
        </div>
    </div>

    @foreach($users as $user)
    <!-- Table data -->
    <article  class="row row-cols-xl-7 align-items-lg-center border-bottom g-4 px-2 py-4">
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
            <h6 class="mb-0 fw-normal">{{ $user->user->created_at }}</h6>
        </div>
        <!-- Data item -->
        <div class="col"><a href="{{ route($destroy,  $user->user->id) }}" class="btn btn-sm btn-light mb-0">Удалить</a></div>
    </article>
    @endforeach
</div>
