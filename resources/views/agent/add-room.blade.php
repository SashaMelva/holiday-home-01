@extends('layouts.agent')

@section('content')
    <section class="container block-center">
        <h4>Добавте новый номер</h4>
        <div class="card shadow m-tb-1">
            <div id="room-form" class="m-tb-1">
                <!-- Room options START -->
                <div id="room-div" class="card shadow m-tb-1">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <h5 class="mb-0">Основная информация о номере</h5>
                    </div>

                    <!-- Card body START -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('lists.store') }}">
                            @csrf
                            @method('POST')
                            <div class="row g-4">
                                <!-- Room name -->
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Название номера *</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                           placeholder="Enter name">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Room Price -->
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Цена номера за ночь *</label>
                                    <input id="price" name="price" type="text" class="form-control"
                                           placeholder="Enter price">
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="number_beds" class="form-label">Кол-во спальных
                                                мест</label>
                                            <input id="number_beds" name="number_beds" type="text"
                                                   class="form-control">
                                            @error('number_beds')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="number_rooms" class="form-label">Кол-во
                                                комнат</label>
                                            <input id="number_rooms" name="number_rooms" type="text"
                                                   class="form-control @error('name') is-invalid @enderror" value="{{ old('number_rooms') }}" >
                                            @error('number_rooms')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="area_square_meters" class="form-label">Площадь номера в
                                        квадратных
                                        метрах</label>
                                    <input id="area_square_meters" name="area_square_meters" type="text"
                                           class="form-control">
                                    @error('area_square_meters')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="check_in_time" class="form-label">Врмя
                                                выезда</label>
                                            <input id="check_in_time" name="check_in_time" type="text"
                                                   class="form-control">
                                            @error('check_in_time')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="check_out_time" class="form-label">Время
                                                въезда</label>
                                            <input id="check_out_time" name="check_out_time" type="text"
                                                   class="form-control">
                                            @error('check_out_time')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
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

                            <div class="card-header border-bottom">
                                <!-- Title -->
                                <h5 class="mb-0">Выберите технику номера</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Thumbnail image -->
                                    <div class="col-12">
                                        <!-- Additional info -->
                                        @foreach($roomEquipments as $roomEquipment)
                                            <input type="checkbox" id="equipment-{{ $roomEquipment->id }}"
                                                   name="{{ $roomEquipment->id }}">
                                            <label
                                                for="equipment-{{ $roomEquipment->id }}">{{ $roomEquipment->name }}</label>
                                        @endforeach

                                    </div>
                                    <button type="submit" class="btn btn-secondary prev-btn mb-0">Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
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
            </div>
            <a href="{{ route('lists.index') }}">Назад</a>
        </div>
    </section>
@endsection
