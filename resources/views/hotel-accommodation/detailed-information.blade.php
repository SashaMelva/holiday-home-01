@extends('hotel-accommodation.add-new-listing')

@section('punkt')
    <div id="stepper" class="bs-stepper stepper-outline">
        <!-- Step content START -->
        <div class="bs-stepper-content p-0 pt-4 pt-md-5">
            <div class="row g-4">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Step 2 content START -->
                    <div class="content">
                        <div class=" gap-4">
                            <!-- Title -->
                            <h4 class="mb-0">Дополнительная информация об отеле</h4>

                            <!-- Overview START -->
                            <div class="card shadow m-tb-1">
                                <!-- Card header -->
                                <div class="card-header border-bottom">
                                    <h5 class="mb-0">Обзор</h5>
                                </div>

                                <!-- Card body START -->
                                <div class="card-body">
                                    <form method="POST" action="{{ route('hotel.service.store') }}">
                                        <div class="row g-4">
                                            <!-- Select Amenities -->
                                            <div class="col-12">
                                                <label class="form-label">Выберете удобства отеля *</label>
                                                @foreach($services as $service)
                                                    <input type="checkbox" id="service-{{ $service->id }}"
                                                           value="{{ $service->id }}" name="{{ $service->name }}">
                                                    <label
                                                        for="service-{{ $service->id }}">{{ $service->name }}</label>
                                                @endforeach
                                                <small>Максимум 14 ключевых слов. Ключевые слова должны быть
                                                    написаны
                                                    строчными буквами и разделены запятыми.</small>
                                            </div>
                                        </div>
                                        <button type="submit">Сохранить</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Size of listing END -->
                            <div class="card shadow m-tb-1">
                                <div class="card-header border-bottom">
                                    <h5 class="mb-0">Количство типов номеров </h5>
                                </div>
                                <div class="card-body row">
                                    <label>Укажите количество типов номеров для вашего отеля</label>
                                    <input value="1">
                                </div>
                            </div>

                            <h4>Добавте информацию о номерах</h4>
                            <div id="room-form" class="m-tb-1">
                                <!-- Room options START -->
                                <div class="card shadow m-tb-1">
                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="mb-0">Основная информация о номере 1</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('rooms.information.store') }}">
                                            @csrf
                                            <div class="row g-4">
                                                <!-- Room name -->
                                                <div class="col-md-6">
                                                    <label for="title" class="form-label">Название номера *</label>
                                                    <input id="title" name="title" type="text" class="form-control"
                                                           placeholder="Enter name">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="category_id" class="form-label">Категория номера</label>
                                                    <select id="category_id" name="category_id" class="form-select"
                                                            aria-label="Default select example">
                                                        @foreach($roomCategories as $category)
                                                            <option
                                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Room Price -->
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Цена номера за ночь *</label>
                                                    <input id="price" name="price" type="text" class="form-control"
                                                           placeholder="Enter price">
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="number_beds" class="form-label">Кол-во спальных
                                                                мест</label>
                                                            <input id="number_beds" name="number_beds" type="text"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="number_rooms" class="form-label">Кол-во
                                                                комнат</label>
                                                            <input id="number_rooms" name="number_rooms" type="text"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="area_square_meters" class="form-label">Площадь номера в
                                                        квадратных
                                                        метрах</label>
                                                    <input id="area_square_meters" name="area_square_meters" type="text"
                                                           class="form-control">
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="check_in_time" class="form-label">Врмя
                                                                выезда</label>
                                                            <input id="check_in_time" name="check_in_time" type="text"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="check_out_time" class="form-label">Время
                                                                въезда</label>
                                                            <input id="check_out_time" name="check_out_time" type="text"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="description" class="form-label">Описание</label>
                                                    <textarea id="description" name="description" class="form-control"
                                                              rows="2"
                                                              placeholder="Enter keywords"></textarea>
                                                </div>
                                                <!-- Button -->

                                            </div>
                                            <button class="btn btn-secondary prev-btn mb-0">Сохранить информацию о
                                                номере
                                            </button>

                                            <input id="hotel_id" name="hotel_id" value="{{ $hotelId }}" hidden="hidden">
                                            <input id="room_number" name="room_number" value="1" hidden="hidden">
                                        </form>
                                    </div>


                                    <div class="card-header border-bottom">
                                        <!-- Title -->
                                        <h5 class="mb-0">Выберите технику номера</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <!-- Thumbnail image -->
                                            <form method="POST" action="{{ route('rooms.equipment.store') }}">
                                                @csrf
                                                <div class="col-12">
                                                    <!-- Additional info -->
                                                    @foreach($roomEquipments as $roomEquipment)
                                                        <input type="checkbox" id="equipment-{{ $roomEquipment->id }}"
                                                               name="{{ $roomEquipment->id }}">
                                                        <label
                                                            for="equipment-{{ $roomEquipment->id }}">{{ $roomEquipment->name }}</label>
                                                    @endforeach

                                                </div>
                                                <button class="btn btn-secondary prev-btn mb-0">Сохранить технику номерa
                                                </button>
                                                <input id="room_number" name="room_number" value="1" hidden="hidden">
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card-header border-bottom">
                                        <!-- Title -->
                                        <h5 class="mb-0">Загрузите фотографии номера</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form action="{{ route('rooms.image.store') }}" method="POST">
                                            @csrf
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
                                                    <p class="small mb-0 mt-2"><b>Примечание: </b>Только JPG, JPEG и
                                                        PNG.
                                                        Наш рекомендуемые размеры 600px * 450px. Изображение
                                                        большего
                                                        размера будет обрезано до 4:3, чтобы соответствовать нашим
                                                        миниатюрам/превью. </p>
                                                </div>
                                            </div>
                                            <button class="btn btn-secondary prev-btn mb-0">Сохранить изображения номера
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 2 content END -->
                        </div>
                    </div>
                </div>
                <a href="{{ route('hotel-accommodation.end') }}">Далее</a>
                <!-- Main content END -->
            </div>
        </div>
        <!-- Step content END -->
    </div>

@endsection
