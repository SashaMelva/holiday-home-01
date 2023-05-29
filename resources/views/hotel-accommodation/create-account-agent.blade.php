@extends('hotel-accommodation.add-new-listing')

@section('punkt')
    <div id="stepper" class="bs-stepper stepper-outline">
        <!-- Step content START -->
        <div class="bs-stepper-content p-0 pt-4 pt-md-5">
            <div class="row g-4">
                <!-- Main content START -->
                <div class="col-12">
                    <!-- Title -->
                    <h4 class="mb-0">Основная информация</h4>
                    <div class="card shadow m-tb-1">
                        <!-- Card header -->
                        <div class="card-header border-bottom">
                            <!-- Title -->
                            <h5 class="mb-0">Зарегестрируйтесь как менеджер отеля</h5>
                        </div>

                        <!-- Card body START -->
                        <div class="card-body m-tb-1">
                            <form method="POST" action="{{ route('agent.information.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror"
                                               name="name" value="{{ old('name') }}" required
                                               autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Email адрес') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required
                                               autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Повторите пароль') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required
                                               autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Зарегестрироваться') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Main content END -->
        </div>
@endsection


