<section>
    @foreach($rooms as $room)
        <article class="card shadow p-3 m-tb-1">
            <div class="row g-4">
                <div class="col-md-5">
                    <div id="carouselExampleInterval{{$room->id}}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($room->img as $img)
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="{{ Storage::url($img->img_url) }}" class="d-block w-100 rounded-4"
                                         alt="{{ $img->description }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval{{$room->id}}"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval{{$room->id}}"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path
                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        Просмотреть детали
                    </button>
                </div>
                <div class="col-md-7">
                    <div class="card-body d-flex flex-column h-100 p-0">
                        <h5 class="card-title">{{ $room->title }}</h5>
                        <ul class="nav mb-2 mb-sm-3">
                            @foreach($roomEquipmentLists as $equipmentList)
                                @if(isset($equipmentList->$room->id) && $equipmentList->$room->id == $room->id)
                                    <li class="nav-item nav-divider">
                                        <div class="point"></div>
                                        <p>{{ $equipmentList->equipment->name }}</p></li>
                                @endif
                            @endforeach
                        </ul>
                        <p class="text-success mb-0">Бесплатная отмена до</p>
                        <div class="card-footer pt-6">
                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <h5 class="fw-normal text-success mb-0 me-1 prise">{{ $room->price }}</h5>
                                    <span class="mb-0 me-2">/день</span>
                                </div>
                                <div class="mt-2 mt-sm-0 z-index-2">
                                    <a class="btn btn-lg btn-primary btn-base mb-0" href="{{ route('booking.review', $room->id) }}">
                                        Выбрать номер
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor"
                                             class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-3">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">О номере</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="p-3">
                                <div id="carouselExampleInterval-modal{{$room->id}}" class="carousel slide"
                                     data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($room->img as $img)
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <img src="{{ Storage::url($img->img_url) }}"
                                                     class="d-block w-100 rounded-4"
                                                     alt="{{ $img->description }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleInterval-modal{{$room->id}}"
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleInterval-modal{{$room->id}}"
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-3">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $room->title }}</h1>
                                <p>{{ $room->description }}</p>
                            </div>
                            <div class="p-3">
                                <h5>Удобства</h5>
                                <div>
                                    <ul class="list-group list-group-borderless mt-2 mb-0">
                                        @foreach($roomEquipmentLists as $equipmentList)
                                            @if(isset($equipmentList->$room->id) && $equipmentList->$room->id == $room->id)
                                                <li class="list-group-item d-flex mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                    </svg>
                                                    <span class="h6 fw-light mb-0">{{ $equipmentList->equipment->name }}</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
    @endforeach
</section>
