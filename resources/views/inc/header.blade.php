<header class="p-2 header-container">
    <div class="container header-content">
        <div class="container-long-logo">
            <a href="/">
                <img class="bi me-2" src="{{ Vite::asset('resources/img/logo-mini/mini-logo.jpg') }}" alt="logo">
            </a>
        </div>
        {{--            @if (Route::has('login'))--}}
        {{--                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">--}}
        {{--                    @auth--}}
        {{--                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>--}}
        {{--                    @else--}}
        {{--                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

        {{--                        @if (Route::has('register'))--}}
        {{--                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
        {{--                        @endif--}}
        {{--                    @endauth--}}
        {{--                </div>--}}
        {{--            @endif--}}

        <ul class="navigation-core align-items-center">

{{--            <li class="li-mag-l-30"><a href="#" class="nav-link px-2 text-rest-dark">Мои бронирования</a></li>--}}
            <li class="li-mag-l-30"><a href="#" class="nav-link px-2 text-rest-dark">Все отели</a></li>
            @if (Route::has('login'))
                @auth
                    <li class="li-mag-l-30"><a href="{{ url('/home') }}"
                                               class="nav-link px-2 text-rest-dark">Личный кабинет</a>
                    </li>
                    <li class="li-mag-l-30"><a href="#" class="nav-link px-2 text-rest-dark">Изобранные</a></li>
                    <li class="li-mag-l-30"><a href="#" class="nav-link px-2 text-rest-dark">Бронирования</a></li>
                @else
                    <li class="li-mag-l-30"><a href="{{ route('login') }}"
                                               class="nav-link px-2 text-rest-dark">Вход</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="li-mag-l-30"><a href="{{ route('register') }}"
                                                   class="nav-link px-2 text-rest-dark">Регистрация</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
        {{--            <div class="dropdown text-end">--}}
        {{--                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"--}}
        {{--                   aria-expanded="false">--}}
        {{--                    <img src="Headers%20%C2%B7%20Bootstrap%20v5.3_files/98681.jpeg" alt="mdo" class="rounded-circle"--}}
        {{--                         width="32" height="32">--}}
        {{--                </a>--}}
        {{--                <ul class="dropdown-menu text-small">--}}
        {{--                    <li><a class="dropdown-item" href="#">Аккаунт</a></li>--}}
        {{--                    <li><a class="dropdown-item" href="#">Избранное</a></li>--}}
        {{--                    <li><a class="dropdown-item" href="#">Бронирования</a></li>--}}
        {{--                    <li>--}}
        {{--                        <hr class="dropdown-divider">--}}
        {{--                    </li>--}}
        {{--                    <li><a class="dropdown-item" href="#">Выход</a></li>--}}
        {{--                </ul>--}}
        {{--            </div>--}}

    </div>
</header>
