@extends('layout')

@section('content')
<main>
    <div class="routes">
        <div class="container">
            <h5>Польща</h5>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <img src="/assets/images/2.jpg" alt="">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Суми-Познань <br>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <hr>
                            <div class="row">
                                <div class="cities">
                                    <p><i class="fas fa-map-marker-alt"></i> Суми-Київ-Сарни-Ковель-Люблін-Варшава-Лодзь-Познань</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <p><i class="far fa-calendar-alt"></i> Сб
                            </div>
                            <hr>
                            <div class="row">
                                <p><i class="far fa-clock"></i> 7:00 </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xl-9">
                                    <a href="rout-card.html">Детальніше про напрям</a>
                                </div>
                                <div class="col-xl-3">
    										<span class="routes-price">
    											<span>1190</span> грн
    										</span>
                                    <a href="{{ URL::to('routes', ['id' => 1]) }}"><button type="button" class="btn btn-primary btn-lg">Купить</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <img src="/assets/images/2.jpg" alt="">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Познань-Суми <br>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <hr>
                            <div class="row">
                                <div class="cities">
                                    <p><i class="fas fa-map-marker-alt"></i> Познань-Лодзь-Варшава-Люблін-Ковель-Сарни-Київ-Суми </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <p><i class="far fa-calendar-alt"></i> Чт</p>
                            </div>
                            <hr>
                            <div class="row">
                                <p><i class="far fa-clock"></i> 7:00</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xl-9">
                                    <a href="rout-card2.html">Детальніше про напрям</a>
                                </div>
                                <div class="col-xl-3">
    										<span class="routes-price">
    											<span>1190</span> грн
    										</span>
                                    <!-- <button type="button" class="btn btn-primary btn-lg">Купить</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection