<!-- Sidebar START -->
<nav class="m-lg-4">
    <div>
        <!-- Navbar brand for xl START -->
        <div class="d-flex align-items-center">
            <a class="img-logo " href="index.html">
                <img class="light-mode-item navbar-brand-item"
                     src="{{ Vite::asset('resources/img/logo-mini/2.png') }}"
                     alt="logo">
            </a>
        </div>

        <!-- Sidebar menu START -->
        <ul class="navbar-nav flex-column" id="navbar-sidebar">
            <!-- Menu item -->
            <li class="nav-item"><a href="{{ route('admin.panel') }}" class="nav-link active">Главная</a>
            </li>


            <!-- Menu item -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button"
                   aria-expanded="false" aria-controls="collapsebooking">
                    Заявки
                </a>
                <!-- Submenu -->
                <ul class="nav collapse flex-column" id="collapsebooking"
                    data-bs-parent="#navbar-sidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin-booking.index') }}">Новые заявки</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin-booking-detail.html">Все заявки</a></li>
                </ul>
            </li>

            <!-- Menu item -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapsesusers" role="button"
                   aria-expanded="false" aria-controls="collapsesusers">
                    Аккаунты
                </a>
                <!-- Submenu -->
                <ul class="nav collapse flex-column" id="collapsesusers"
                    data-bs-parent="#navbar-sidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Администраторы</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('guests.index') }}">Клиеты</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('agents.index') }}">Агенты</a></li>
                </ul>
            </li>
            <!-- Menu item -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button"
                   aria-expanded="false" aria-controls="collapseguest">
                    Истории входа
                </a>
                <!-- Submenu -->
                <ul class="nav collapse flex-column" id="collapseguest"
                    data-bs-parent="#navbar-sidebar">
                    <li class="nav-item"><a class="nav-link" href="admin-guest-detail.html">Администраторы</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('guests.index') }}">Клиеты</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin-guest-detail.html">Агенты</a></li>
                </ul>
            </li>
            <!-- Menu item -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button"
                   aria-expanded="false" aria-controls="collapseagent">
                    Просмотр данных
                </a>
                <!-- Submenu -->
                <ul class="nav collapse flex-column" id="collapseagent"
                    data-bs-parent="#navbar-sidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('agents.index') }}">Отели</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin-agent-detail.html">Номера</a></li>
                </ul>
            </li>

            <!-- Menu item -->
            <li class="nav-item"><a class="nav-link" href="admin-settings.html">Аккаунт</a></li>

        </ul>
        <!-- Sidebar menu end -->

        <!-- Sidebar footer START -->
        <div
            class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
            <a class="h6 fw-light mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip"
               data-bs-placement="top" aria-label="Sign out">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Выход
            </a>
            <a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip"
               data-bs-placement="top" aria-label="Settings">
                <i class="bi bi-gear-fill"></i>
            </a>
        </div>
        <!-- Sidebar footer END -->
    </div>
</nav>
