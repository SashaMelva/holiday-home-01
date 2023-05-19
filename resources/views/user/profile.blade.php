@extends('layouts.app')

@section('content')
    <div class="container block-center m-tb-1">
        <!-- Personal info START -->
        <div class="card border m-tb-1">
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
                            <label  for="surname" class="form-label">Фамилия</label>
                            <input id="surname" name="surname" type="text" class="form-control" placeholder="Фамилия" required>
                        </div>
                        <div class="col">
                            <label  for="name" class="form-label">Имя</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Имя" value=""
                                   required>
                        </div>
                        <div class="col">
                            <label  for="patronymic" class="form-label">Отчество</label>
                            <input id="patronymic" name="patronymic" type="text" class="form-control" placeholder="Отчество">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" name="email" type="email" class="form-control"
                               value="">
                    </div>

                    <!-- Mobile -->
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label">Номер телефона</label>
                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                               placeholder="8-000-000-00-00" required>
                    </div>

                    <!-- Date of birth -->
                    <div class="col-md-6">
                        <label for="date_birth" class="form-label">Дата рождения<span class="text-danger">*</span></label>
                        <input id="date_birth" name="date_birth" type="text" class="form-control flatpickr flatpickr-input" value="29 Aug 1996" data-date-format="d M Y" readonly="readonly">
                    </div>

                    <!-- Gender -->
                    <div class="col-md-6">
                        <label class="form-label">Выберете пол<span class="text-danger">*</span></label>
                        <div class="d-flex gap-4">
                            <div class="form-check radio-bg-light">
                                <input class="form-check-input" type="radio" name="gender_male"
                                       id="gender_male" checked="">
                                <label class="form-check-label" for="gender_male">
                                    Мужской
                                </label>
                            </div>
                            <div class="form-check radio-bg-light">
                                <input class="form-check-input" type="radio" name="gender_female"
                                       id="gender_female">
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
        </div>

        <!-- Personal info END -->
        <div class="card border m-tb-1">
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
                            <input type="text" class="form-control" id="passport_series" name="passport_series" required>
                        </div>
                        <div class="col-md-4">
                            <label for="passport_number" class="form-label">Номер</label>
                            <input type="text" class="form-control" id="passport_number" name="passport_number" required>
                        </div>
                        <div class="col-md-4">
                            <label for="issued_by" class="form-label">Дата вдачи<span class="text-danger">*</span></label>
                            <input id="issued_by" name="issued_by" type="text" class="form-control flatpickr flatpickr-input" value="29 Aug 1996" data-date-format="d M Y" readonly="readonly">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="issued_by" class="form-label">Кем выдан</label>
                        <input type="text" class="form-control" id="issued_by" name="issued_by"
                               placeholder="Наименование организации" required>
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
        </div>


        <!-- Update email START -->
        <div class="card border m-tb-1">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h4 class="card-header-title">Update email</h4>
                <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
            </div>

            <!-- Card body START -->
            <div class="card-body">
                <form>
                    <!-- Email -->
                    <label class="form-label">Enter your new email id<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="Enter your email id">

                    <div class="text-end mt-3">
                        <a href="#" class="btn btn-primary mb-0">Save Email</a>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Update email END -->

        <!-- Update Password START -->
        <div class="card border m-tb-1">
            <!-- Card header -->
            <div class="card-header border-bottom">
                <h4 class="card-header-title">Update Password</h4>
                <p class="mb-0">Your current email address is <span class="text-primary">example@gmail.com</span></p>
            </div>

            <!-- Card body START -->
            <form class="card-body">
                <!-- Current password -->
                <div class="mb-3">
                    <label class="form-label">Current password</label>
                    <input class="form-control" type="password" placeholder="Enter current password">
                </div>
                <!-- New password -->
                <div class="mb-3">
                    <label class="form-label"> Enter new password</label>
                    <div class="input-group">
                        <input class="form-control fakepassword" placeholder="Enter new password" type="password"
                               id="psw-input">
                        <span class="input-group-text p-0 bg-transparent">
										<i class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
									</span>
                    </div>
                </div>
                <!-- Confirm -->
                <div class="mb-3">
                    <label class="form-label">Confirm new password</label>
                    <input class="form-control" type="password" placeholder="Confirm new password">
                </div>

                <div class="text-end">
                    <a href="#" class="btn btn-primary mb-0">Change Password</a>
                </div>
            </form>
            <!-- Card body END -->
        </div>
        <!-- Update Password END -->

    </div>
@endsection
