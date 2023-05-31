@extends('layouts.app')

@section('content')
    <section class="py-0 container block-center">
        <div class="card bg-light overflow-hidden px-sm-5">
            <div class="row align-items-center g-4">
                <div class="col-sm-9 card-body">
                    <h1 class="m-0 h2 card-title">Проверьте свое бронирование</h1>
                </div>
                <div class="col-sm-3 text-end d-none d-sm-block">
                    <img class="mb-n4" src="{{ Vite::asset('resources/img/17.svg') }}">
                </div>
            </div>
        </div>
    </section>

    <div class="container block-center">
        <div class="row g-4 g-lg-5 ">
            <div class="col-xl-8">
                <section class="card shadow p-4 m-tb-1">
                    <div class="card-header p-4 border-bottom">
                        <h3 class="mb-0">Информация об отеле</h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="card mb-4">
                            <div class="row align-items-center">
                                <div class="col-sm-6 col-md-5">

                                    <img class="card-img d-block w-100 rounded-4"
                                         @if(isset($room->img[0]->img_url)) src="{{ Storage::url($room->img[0]->img_url) }}"
                                         alt="{{ $room->img[0]->description }}" @endif>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="card-body pt-3 pt-sm-0 p-0">
                                        <h5 class="card-title"><a href="#">{{ $room->title }}</a></h5>
                                        <p class="small mb-2"> {{ $hotel->short_title }} </p>
                                        <p class="small mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                            {{ $hotel->city->title }}, {{ $hotel->address }}
                                        </p>
                                        <ul class="list-inline mb-0">
                                            @for($i = 0; $i < $hotel->star; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor"
                                                     class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-light py-3 px-4 rounded-3">
                                    <h6 class="fw-light small mb-1">Прибытие</h6>
                                    <h5 class="mb-1">{{ $dataBooking['arrival_date'] }}</h5>
                                    <small>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                            <path
                                                d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                            <path
                                                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                                        </svg>
                                        {{ $room['check_in_time'] }}
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light py-3 px-4 rounded-3">
                                    <h6 class="fw-light small mb-1">Уезд</h6>
                                    <h5 class="mb-1">{{ $dataBooking['date_departure'] }}</h5>
                                    <small>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                            <path
                                                d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                            <path
                                                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                                        </svg>
                                        {{ $room['check_out_time'] }}
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-light py-3 px-4 rounded-3">
                                    <h6 class="fw-light small mb-1">Гости</h6>
                                    <h5 class="mb-1">{{ $dataBooking['count_adults'] }} взрослых</h5>
                                    <h5 class="mb-1">{{ $dataBooking['count_children'] }} детей</h5>
                                    <small>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                                            <path
                                                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                        </svg>
                                        {{ $countNight + 1 }} дня - {{ $countNight }} ночи
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="card border mt-4">
                            <div class="card-header border-bottom d-md-flex justify-content-md-between">
                                <h5 class="card-title mb-0">Техника в номере</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-borderless mt-2 mb-0">
                                    @foreach($roomEquipmentLists as $equipmentList)
                                        @if(isset($equipmentList->room->id) && $equipmentList->room->id == $room->id)
                                            <li class="list-group-item d-flex mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-check-circle-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                </svg>
                                                <span
                                                    class="h6 fw-light mb-0">{{ $equipmentList->equipment->name }}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="card border m-tb-1">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h4 class="card-header-title">Персональная информация о вас</h4>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Form START -->
                        <form class="row g-3" method="POST" action="{{ route('user.data.save') }}">
                            @csrf
                            <!-- Name -->
                            <div class="row g-3">
                                <div class="col">
                                    <label for="surname" class="form-label">Фамилия</label>
                                    <input id="surname" name="surname" type="text" class="form-control"
                                           placeholder="Фамилия"
                                           value="@if(isset($userData[0]['surname'])){{ $userData[0]['surname'] }}@endif"
                                           required>
                                </div>
                                <div class="col">
                                    <label for="name" class="form-label">Имя</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Имя"
                                           value="@if(isset($userData[0]['name'])){{ $userData[0]['name'] }}@endif"
                                           required>
                                </div>
                                <div class="col">
                                    <label for="patronymic" class="form-label">Отчество</label>
                                    <input id="patronymic" name="patronymic" type="text" class="form-control"
                                           placeholder="Отчество"
                                           value="@if(isset($userData[0]['patronymic'])){{ $userData[0]['patronymic'] }}@endif">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="email" class="form-control"
                                       value="@if(isset($user['email'])){{ $user['email'] }}@endif" required>
                            </div>

                            <!-- Mobile -->
                            <div class="col-md-6">
                                <label for="phone_number" class="form-label">Номер телефона</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number"
                                       placeholder="8-000-000-00-00"
                                       value="@if(isset($userData[0]['phone_number'])){{ $userData[0]['phone_number'] }}@endif"
                                       required>
                            </div>

                            <!-- Date of birth -->
                            <div class="col-md-6">
                                <label for="date_birth" class="form-label">Дата рождения<span
                                        class="text-danger">*</span></label>
                                <input id="date_birth" name="date_birth" type="date"
                                       class="form-control flatpickr flatpickr-input"
                                       value="@if(isset($userData[0]['date_birth'])){{ $userData[0]['date_birth'] }}@else {{ config('global.DATE_ARRIVAL') }} @endif"
                                       required>
                            </div>

                            <!-- Gender -->
                            <div class="col-md-6">
                                <label class="form-label">Выберете пол<span class="text-danger">*</span></label>
                                <div class="d-flex gap-4">
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="gender"
                                               id="gender_male"
                                               @if(isset($userData[0]['gender']) )
                                                   @if($userData[0]['gender'] == "male" || is_null($userData[0]['gender']))
                                                       checked=""
                                                  @endif
                                               @endif  value="male">
                                        <label class="form-check-label" for="gender_male">
                                            Мужской
                                        </label>
                                    </div>
                                    <div class="form-check radio-bg-light">
                                        <input class="form-check-input" type="radio" name="gender"
                                               id="gender_female"
                                               @if(isset($userData[0]['gender']) && $userData[0]['gender'] == "female") checked=""
                                               @endif value="female">
                                        <label class="form-check-label" for="gender_female">
                                            Женский
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary mb-0">Сохранить изменения</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Card body END -->
                </section>

                <!-- Personal info END -->
                <section class="card border m-tb-1">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h4 class="card-header-title">Введите ваши паспортные данные</h4>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <!-- Form START -->
                        <form class="row g-3" method="POST" action="{{ route('user.passport.save') }}">
                            @csrf
                            <!-- Passport -->
                            <div class="col-12">
                                <label for="citizenship" class="form-label">Гражданство</label>
                                <input type="text" class="form-control" id="citizenship" name="citizenship"
                                       value="Российское" readonly required>
                            </div>
                            <div class="col-12 row">
                                <div class="col-md-4">
                                    <label for="passport_series" class="form-label">Серия</label>
                                    <input type="text" class="form-control" id="passport_series" name="passport_series"
                                           value="@if(isset($userPassportData[0]['passport_series'])){{ $userPassportData[0]['passport_series'] }} @endif"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="passport_number" class="form-label">Номер</label>
                                    <input type="text" class="form-control" id="passport_number" name="passport_number"
                                           value="@if(isset($userPassportData[0]['passport_number'])) {{ $userPassportData[0]['passport_number'] }} @endif"
                                           required>
                                </div>
                                <div class="col-md-4">
                                    <label for="date_registration" class="form-label">Дата вдачи<span
                                            class="text-danger">*</span></label>
                                    <input id="date_registration" name="date_registration" type="date"
                                           class="form-control flatpickr flatpickr-input"
                                           @if(isset($userPassportData[0]['date_registration'])) value="{{ $userPassportData[0]['date_registration'] }}"
                                           @else value="{{ config('global.DATE_ARRIVAL') }}" @endif" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="issued_by" class="form-label">Кем выдан</label>
                                <input type="text" class="form-control" id="issued_by" name="issued_by"
                                       placeholder="Наименование организации"
                                       value="@if(isset($userPassportData[0]['issued_by'])){{ $userPassportData[0]['issued_by'] }} @endif"
                                       required>
                            </div>

                            <!-- Button -->
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary mb-0">Сохранить изменения</button>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Card body END -->
                </section>

                @if($dataBooking['count_adults'] > 1)
                    <p hidden="">{{ $i = 1 }}</p>
                    @while($i < (int)$dataBooking['count_adults'])
                        <p hidden=""> {{ $i++ }}</p>
                        <section class="card border m-tb-1">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Персональная информация о госте номер {{ $i }}</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-3" method="POST" action="{{ route('user.data.save') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="surname" class="form-label">Фамилия</label>
                                            <input id="surname" name="surname" type="text" class="form-control"
                                                   placeholder="Фамилия"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label for="name" class="form-label">Имя</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Имя"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label for="patronymic" class="form-label">Отчество</label>
                                            <input id="patronymic" name="patronymic" type="text" class="form-control"
                                                   placeholder="Отчество"
                                                   value="">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                               value="" required>
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-md-6">
                                        <label for="phone_number" class="form-label">Номер телефона</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                                               placeholder="8-000-000-00-00"
                                               value=""
                                               required>
                                    </div>

                                    <!-- Date of birth -->
                                    <div class="col-md-6">
                                        <label for="date_birth" class="form-label">Дата рождения<span
                                                class="text-danger">*</span></label>
                                        <input id="date_birth" name="date_birth" type="date"
                                               class="form-control flatpickr flatpickr-input"
                                               value="{{ config('global.DATE_ARRIVAL') }}"
                                               required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <label class="form-label">Выберете пол<span class="text-danger">*</span></label>
                                        <div class="d-flex gap-4">
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       id="gender_male"
                                                       checked=""
                                                       value="male">
                                                <label class="form-check-label" for="gender_male">
                                                    Мужской
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       id="gender_female"
                                                        value="female">
                                                <label class="form-check-label" for="gender_female">
                                                    Женский
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary mb-0">Сохранить изменения</button>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </section>

                        <!-- Personal info END -->
                        <section class="card border m-tb-1">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Введите паспортные данные гостя номер {{ $i }}</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-3" method="POST" action="{{ route('user.passport.save') }}">
                                    @csrf
                                    <!-- Passport -->
                                    <div class="col-12">
                                        <label for="citizenship" class="form-label">Гражданство</label>
                                        <input type="text" class="form-control" id="citizenship" name="citizenship"
                                               value="Российское" readonly required>
                                    </div>
                                    <div class="col-12 row">
                                        <div class="col-md-4">
                                            <label for="passport_series" class="form-label">Серия</label>
                                            <input type="text" class="form-control" id="passport_series" name="passport_series"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="passport_number" class="form-label">Номер</label>
                                            <input type="text" class="form-control" id="passport_number" name="passport_number"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="date_registration" class="form-label">Дата вдачи<span
                                                    class="text-danger">*</span></label>
                                            <input id="date_registration" name="date_registration" type="date"
                                                   class="form-control flatpickr flatpickr-input"
                                                   value="{{ config('global.DATE_ARRIVAL') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="issued_by" class="form-label">Кем выдан</label>
                                        <input type="text" class="form-control" id="issued_by" name="issued_by"
                                               placeholder="Наименование организации"
                                               value=""
                                               required>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary mb-0">Сохранить изменения</button>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </section>

                    @endwhile
                @endif

                @if($dataBooking['count_children'] > 0)
                    <h5>Введите данные о детях</h5>
                   <p hidden=""> {{ $j = 0 }} </p>
                    @while($j < (int)$dataBooking['count_children'])
                        <p hidden="">{{ $j++ }}</p>
                        <section class="card border m-tb-1">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h4 class="card-header-title">Персональная информация о ребёнке номер {{ $j }}</h4>
                            </div>

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Form START -->
                                <form class="row g-3" method="POST" action="{{ route('user.data.save') }}">
                                    @csrf
                                    <!-- Name -->
                                    <div class="row g-3">
                                        <div class="col">
                                            <label for="surname" class="form-label">Фамилия</label>
                                            <input id="surname" name="surname" type="text" class="form-control"
                                                   placeholder="Фамилия"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label for="name" class="form-label">Имя</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Имя"
                                                   value=""
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label for="patronymic" class="form-label">Отчество</label>
                                            <input id="patronymic" name="patronymic" type="text" class="form-control"
                                                   placeholder="Отчество"
                                                   value="">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                               value="" required>
                                    </div>

                                    <!-- Mobile -->
                                    <div class="col-md-6">
                                        <label for="phone_number" class="form-label">Номер телефона</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                                               placeholder="8-000-000-00-00"
                                               value=""
                                               required>
                                    </div>

                                    <!-- Date of birth -->
                                    <div class="col-md-6">
                                        <label for="date_birth" class="form-label">Дата рождения<span
                                                class="text-danger">*</span></label>
                                        <input id="date_birth" name="date_birth" type="date"
                                               class="form-control flatpickr flatpickr-input"
                                               value="{{ config('global.DATE_ARRIVAL') }}"
                                               required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <label class="form-label">Выберете пол<span class="text-danger">*</span></label>
                                        <div class="d-flex gap-4">
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       id="gender_male"
                                                       checked=""
                                                       value="male">
                                                <label class="form-check-label" for="gender_male">
                                                    Мужской
                                                </label>
                                            </div>
                                            <div class="form-check radio-bg-light">
                                                <input class="form-check-input" type="radio" name="gender"
                                                       id="gender_female"
                                                       value="female">
                                                <label class="form-check-label" for="gender_female">
                                                    Женский
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary mb-0">Сохранить изменения</button>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                </form>
                                <!-- Form END -->
                            </div>
                            <!-- Card body END -->
                        </section>
                    @endwhile
                @endif
            </div>

            <aside class="col-xl-4">
                <div class="col-md-6 col-xl-12 m-tb-1">
                    <div class="card shadow rounded-2">
                        <div class="card-header border-bottom">
                            <h5 class="card-title mb-0">Цена</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="h6 fw-light mb-0">Цена номера за сутки</span>
                                    <span class="fs-5">{{ $room->price }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="h6 fw-light mb-0">Количество суток</span>
                                    <span class="fs-5">{{ $countNight }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="h6 fw-light mb-0">Общая цена</span>
                                    <span class="fs-5">{{ $sumPrice }}</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-primary" href="{{ route('check.booking', $dataBooking->id) }}">Подтвердить бронирование</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
