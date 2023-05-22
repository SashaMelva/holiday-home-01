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
                        <!-- Step 2 content START -->
                        <div class="content">
                            <div class=" gap-4">
                                <!-- Title -->
                                <h4 class="mb-0">Дополнительная информация</h4>

                                <!-- Overview START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Обзор</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-4">
                                            <!-- Select Amenities -->
                                            <div class="col-12">
                                                <label class="form-label">Выберете удобства *</label>
                                                <div class="choices" data-type="select-multiple" role="combobox"
                                                     aria-autocomplete="list" aria-haspopup="true"
                                                     aria-expanded="false">
                                                    <div class="choices__inner"><select
                                                            class="form-select js-choice border-0 z-index-9 bg-transparent choices__input"
                                                            multiple="multiple" aria-label=".form-select-sm"
                                                            data-max-item-count="15" data-remove-item-button="true"
                                                            tabindex="-1" data-choice="active" hidden=""></select>
                                                        <div class="choices__list choices__list--multiple"></div>
                                                        <input type="search" name="search_terms"
                                                               class="choices__input choices__input--cloned"
                                                               autocomplete="off" autocapitalize="none"
                                                               spellcheck="false" role="textbox"
                                                               aria-autocomplete="list" aria-label="Select amenities"
                                                               placeholder="Select amenities"
                                                               style="min-width: 17ch; width: 1ch;"></div>
                                                    <div class="choices__list choices__list--dropdown"
                                                         aria-expanded="false">
                                                        <div class="choices__list" aria-multiselectable="true"
                                                             role="listbox">
                                                            <div id="choices--9by4-item-choice-2"
                                                                 class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                                 role="option" data-choice="" data-id="2"
                                                                 data-value="Swimming pool"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="" aria-selected="true">Swimming
                                                                pool
                                                            </div>
                                                            <div id="choices--9by4-item-choice-3"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="3"
                                                                 data-value="Spa" data-select-text="Press to select"
                                                                 data-choice-selectable="">Spa
                                                            </div>
                                                            <div id="choices--9by4-item-choice-4"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="4"
                                                                 data-value="Kid's play area"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Kid's play area
                                                            </div>
                                                            <div id="choices--9by4-item-choice-5"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="5"
                                                                 data-value="Gym" data-select-text="Press to select"
                                                                 data-choice-selectable="">Gym
                                                            </div>
                                                            <div id="choices--9by4-item-choice-6"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="6"
                                                                 data-value="Ironing Service"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Ironing Service
                                                            </div>
                                                            <div id="choices--9by4-item-choice-7"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="7"
                                                                 data-value="Concierge"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Concierge
                                                            </div>
                                                            <div id="choices--9by4-item-choice-8"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="8"
                                                                 data-value="Lift" data-select-text="Press to select"
                                                                 data-choice-selectable="">Lift
                                                            </div>
                                                            <div id="choices--9by4-item-choice-9"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="9"
                                                                 data-value="Dry cleaning"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Dry cleaning
                                                            </div>
                                                            <div id="choices--9by4-item-choice-10"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="10"
                                                                 data-value="Room Service"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Room Service
                                                            </div>
                                                            <div id="choices--9by4-item-choice-11"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="11"
                                                                 data-value="Waiting Area"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Waiting Area
                                                            </div>
                                                            <div id="choices--9by4-item-choice-12"
                                                                 class="choices__item choices__item--choice choices__item--selectable"
                                                                 role="option" data-choice="" data-id="12"
                                                                 data-value="Secrete smoking area"
                                                                 data-select-text="Press to select"
                                                                 data-choice-selectable="">Secrete smoking area
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small>Максимум 14 ключевых слов. Ключевые слова должны быть написаны
                                                    строчными буквами и разделены запятыми.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Size of listing START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Размер вашего отеля</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-4">
                                            <!-- Total Floor -->
                                            <div class="col-md-4">
                                                <label class="form-label">Общее количесство номеров *</label>
                                                <input type="text" class="form-control"
                                                       placeholder="Enter total floors">
                                            </div>

                                            <!-- Total Floor -->
                                            <div class="col-md-4">
                                                <label class="form-label">Количество звёзд отеля *</label>
                                                <input type="text" class="form-control" placeholder="Enter total rooms">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Size of listing END -->

                                <!-- Room options START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Варианты номеров </h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-4">
                                            <!-- Room name -->
                                            <div class="col-md-6">
                                                <label class="form-label">Название номера *</label>
                                                <input type="text" class="form-control" placeholder="Enter name">
                                            </div>
                                            <!-- Room Price -->
                                            <div class="col-md-6">
                                                <label class="form-label">Цена номера за ночь *</label>
                                                <input type="text" class="form-control" placeholder="Enter price">
                                            </div>

                                            <!-- Additional info -->
                                            <div class="col-md-6">
                                                <label class="form-label">Добавте технику номера</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Кол-во спальных мест</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Кол-во комнат</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Площадь номера в квадратных метрах</label>
                                                <input type="text" class="form-control">
                                            </div>



                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Время въезда</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Врмя выезда</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Описание</label>
                                                <textarea class="form-control" rows="2"
                                                          placeholder="Enter keywords"></textarea>
                                            </div>
                                            <!-- Button -->

                                        </div>
                                    </div>
                                    <!-- Card body END -->
                                </div>
                                <!-- Room options END -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <!-- Title -->
                                        <h5 class="mb-0">Загрузите фотографии номера</h5>
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
                                        <div class="col-12">
                                            <a href="#" class="btn btn-sm btn-primary-soft mb-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-plus-circle"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path
                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                                Добавить новую комнату</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 button -->
                                <div class="gap-2 flex-wrap justify-content-between">
                                    <button class="btn btn-secondary prev-btn mb-0">Назад</button>
                                    <button class="btn btn-primary next-btn mb-0">Далее</button>
                                </div>

                            </div>
                            <!-- Step 2 content END -->

                        </div>
                    </form>
                </div>
            </div>
            <!-- Main content END -->

        </div>
    </div>
    <!-- Step content END -->
    </div>

@endsection
