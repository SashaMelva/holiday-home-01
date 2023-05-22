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
                               @if(isset($userData[0]['gender']) && $userData[0]['gender'] == "male" || is_null($userData[0]['gender'])) checked=""
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
