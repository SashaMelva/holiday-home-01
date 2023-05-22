@extends('hotel-accommodation.add-new-listing')

@section('punkt')
    <div id="stepper" class="bs-stepper stepper-outline">
        <!-- Step Buttons START -->
        <div class="bs-stepper-header" role="tablist">
            <!-- Step 1 -->
            <div class="step active" data-target="#step-1">
                <div class="text-center">
                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1"
                            aria-controls="step-1" aria-selected="true">
                        <span class="bs-stepper-circle">1</span>
                    </button>
                    <h6 class="bs-stepper-label d-none d-md-block">Основная информация</h6>
                </div>
            </div>
            <div class="line"></div>

            <!-- Step 2 -->
            <div class="step" data-target="#step-2">
                <div class="text-center">
                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2"
                            aria-controls="step-2" aria-selected="false">
                        <span class="bs-stepper-circle">2</span>
                    </button>
                    <h6 class="bs-stepper-label d-none d-md-block">
                        Подробная информация
                    </h6>
                </div>
            </div>
            <div class="line"></div>

            <!-- Step 3 -->
            <div class="step" data-target="#step-3">
                <div class="text-center">
                    <button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3"
                            aria-controls="step-3" aria-selected="false">
                        <span class="bs-stepper-circle">3</span>
                    </button>
                    <h6 class="bs-stepper-label d-none d-md-block">
                        Цена и политика </h6>
                </div>
            </div>
        </div>
        <!-- Step Buttons END -->

        <!-- Step content START -->
        <div class="bs-stepper-content p-0 pt-4 pt-md-5">
            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-12">
                    <form>
                        <!-- Step 1 content START -->
                        <div id="step-1" role="tabpanel" class="content">
                            <div class="gap-4">
                                <!-- Title -->
                                <h4 class="mb-0">Основная информация</h4>

                                <!-- Listing category START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <!-- Title -->
                                        <h5 class="mb-0">Выберите категорию жилья</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body m-tb-1">
                                        <div class="row g-4">
                                            <!-- Choose type -->
                                            <div class="col-12">
                                                <label class="form-label">Выберите тип отеля *</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Доступные типы отелей</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <small>Отель: Профессиональные предприятия гостиничного бизнеса, которые
                                                    обычно имеют уникальный стиль или тема, определяющая их бренд и
                                                    декор </small>
                                            </div>

                                            <!-- Listing Name -->
                                            <div class="col-12">
                                                <label class="form-label">Полное название отеля *</label>
                                                <input class="form-control" type="text"
                                                       placeholder="Гостиница Интурист-Краснодар в Краснодаре">
                                                <small>Включает в себя тип и название вашего жилья для туризма и город в
                                                    котором она находится</small>
                                            </div>

                                            <!-- Listing Name -->
                                            <div class="col-12">
                                                <label class="form-label">Кароткое название отеля *</label>
                                                <input class="form-control" type="text"
                                                       placeholder="Интурист-Краснодар">
                                                <small>Маркировачное название отеля</small>
                                            </div>

                                            <!-- Short description -->
                                            <div class="col-12">
                                                <label class="form-label">Опсание отеля *</label>
                                                <textarea class="form-control" rows="2"
                                                          placeholder="Enter keywords"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Listing category END -->

                                <!-- Listing location START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Локация</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <!-- City -->
                                            <div class="col-md-6">
                                                <label class="form-label">Город *</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Выберите город из списка</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Сущесствующие города</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">или добавте новый</label>
                                                        <input class="form-control" type="text"
                                                               placeholder="Введите название города">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Street -->
                                            <div class="col-12">
                                                <label class="form-label">Адресс *</label>
                                                <input class="form-control" type="text" placeholder="Введите адресс">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Listing location END -->

                                <!-- Upload image START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <!-- Title -->
                                        <h5 class="mb-0">Загрузите фотографии отеля</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <!-- Thumbnail image -->
                                            <div class="col-12">
                                                <label class="form-label">Загрузите изображения *</label>
                                                <input class="form-control m-tb-1" type="file" name="my-image"
                                                       id="image"
                                                       accept="image/gif, image/jpeg, image/png">
                                                <input class="form-control m-tb-1" type="file" name="my-image"
                                                       id="image"
                                                       accept="image/gif, image/jpeg, image/png">
                                                <input class="form-control m-tb-1" type="file" name="my-image"
                                                       id="image"
                                                       accept="image/gif, image/jpeg, image/png">
                                                <input class="form-control m-tb-1" type="file" name="my-image"
                                                       id="image"
                                                       accept="image/gif, image/jpeg, image/png">
                                                <p class="small mb-0 mt-2"><b>Примечание: </b>Только JPG, JPEG и PNG.
                                                    Наш рекомендуемые размеры 600px * 450px. Изображение большего
                                                    размера будет обрезано до 4:3, чтобы соответствовать нашим
                                                    миниатюрам/превью. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Upload image END -->

                                <!-- Step 1 button -->
                                <div class="text-end">
                                    <a class="btn btn-primary next-btn mb-0" href="{{ route('basic-information.add') }}">Далее</a>
                                </div>
                            </div>
                        </div>
                        <!-- Step 1 content END -->
                    </form>
                </div>
            </div>
            <!-- Main content END -->
        </div>
    </div>
@endsection

