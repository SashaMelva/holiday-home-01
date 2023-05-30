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
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.hotels.new') }}">Новые заявки</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.hotels') }}">Все заявки</a></li>
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
            <li class="nav-item"><a class="nav-link" href="admin-settings.html">Аккаунт</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd"
                              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Выход
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
        <!-- Sidebar menu end -->

        <!-- Sidebar footer START -->
        <div
            class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
            <a href="/" class="h6 fw-light mb-0 text-body" data-bs-toggle="tooltip"
               data-bs-placement="top" aria-label="Sign out">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd"
                          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                Выход
            </a>
            <a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip"
               data-bs-placement="top" aria-label="Settings">
                <i class="bi bi-gear-fill"></i>
            </a>
        </div>
        <!-- Sidebar footer END -->
    </div>
</nav>
