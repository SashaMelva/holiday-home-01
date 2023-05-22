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
