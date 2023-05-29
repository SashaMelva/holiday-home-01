@extends('hotel-accommodation.add-new-listing')

@section('punkt')
    <div id="stepper" class="bs-stepper stepper-outline">

        <!-- Step content START -->
        <div class="bs-stepper-content p-0 pt-4 pt-md-5">
            <div class="row g-4">

                <!-- Main content START -->
                <div class="col-12">
                    <form method="POST" action="{{ route('hotel.information.store') }}">
                        @csrf
                        <!-- Step 1 content START -->
                        <div id="step-1" role="tabpanel" class="content">
                            <div class="gap-4">
                                <!-- Title -->
                                <h4 class="mb-0">Информация об отеле</h4>
                                <!-- Card body END -->
                            </div>
                            <!-- Listing category START -->
                            <div class="card shadow m-tb-1">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <!-- Title -->
                                    <h5 class="mb-0">Выберите категорию отеля</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body m-tb-1">
                                    <div class="row g-4">
                                        <!-- Choose type -->
                                        <div class="col-12">
                                            <label class="form-label">Выберите тип отеля *</label>
                                            <select id="category_id" name="category_id" class="form-select" aria-label="Default select example" required>
                                                @foreach($typeHotels as $typeHotel)
                                                    <option value="{{ $typeHotel->id }}">{{ $typeHotel->name }}</option>
                                                @endforeach
                                            </select>
                                            <small>Отель: Профессиональные предприятия гостиничного бизнеса, которые
                                                обычно имеют уникальный стиль или тема, определяющая их бренд и
                                                декор </small>
                                        </div>

                                        <!-- Listing Name -->
                                        <div class="col-12">
                                            <label class="form-label">Полное название отеля *</label>
                                            <input id="full_title" name="full_title" class="form-control" type="text"
                                                   placeholder="Гостиница Интурист-Краснодар в Краснодаре" required>
                                            <small>Включает в себя тип и название вашего жилья для туризма и город в
                                                котором она находится</small>
                                        </div>

                                        <!-- Listing Name -->
                                        <div class="col-12">
                                            <label class="form-label">Кароткое название отеля *</label>
                                            <input id="short_title" name="short_title" class="form-control" type="text"
                                                   placeholder="Интурист-Краснодар" required>
                                            <small>Маркировачное название отеля</small>
                                        </div>
                                        <!-- Size of listing START -->
                                        <div class="col-12">
                                            <h5 class="mb-0">Размер вашего отеля</h5>
                                            <div class="row g-4">
                                                <!-- Total Floor -->
                                                <div class="col-md-4">
                                                    <label for="number_rooms" class="form-label">Общее количество номеров *</label>
                                                    <input id="number_rooms" name="number_rooms" type="text" class="form-control" required>
                                                </div>

                                                <!-- Total Floor -->
                                                <div class="col-md-4">
                                                    <label for="star" class="form-label">Количество звёзд отеля *</label>
                                                    <input id="star" name="star" type="text" class="form-control" required>
                                                </div>
                                            </div>

                                            <!-- Card body END -->
                                        </div>
                                        <!-- Short description -->
                                        <div class="col-12">
                                            <label for="description" class="form-label">Опсание отеля *</label>
                                            <textarea id="description" name="description" class="form-control" rows="2"
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
                                                    <select id="city_id" name="city_id" class="form-select"
                                                            aria-label="Default select example">
                                                        <option selected value="0">Добавить новый город</option>
                                                        @foreach($cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">или добавте новый</label>
                                                    <input id="city_add" name="city_add" class="form-control"
                                                           type="text"
                                                           placeholder="Введите название города">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Street -->
                                        <div class="col-12">
                                            <label class="form-label">Адресс *</label>
                                            <input id="address" name="address" class="form-control" type="text"
                                                   placeholder="Введите адресс" required>
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
                                            <input class="form-control m-tb-1" type="file" name="hotel_image"
                                                   id="image"
                                                   accept="image/gif, image/jpeg, image/png">
                                            <input class="form-control m-tb-1" type="file" name="hotel_image"
                                                   id="image"
                                                   accept="image/gif, image/jpeg, image/png">
                                            <input class="form-control m-tb-1" type="file" name="hotel_image"
                                                   id="image"
                                                   accept="image/gif, image/jpeg, image/png">
                                            <input class="form-control m-tb-1" type="file" name="hotel_image"
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
                                <button class="btn btn-primary next-btn mb-0" type="submit">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Step 1 content END -->
            </div>
        </div>
        <!-- Main content END -->
    </div>
@endsection

