@extends('layout')

@section('content')
    <main>
        <div class="conteiner-fluid">
            <div class="routes-buy">
                <div class="container">
                    <div class="rout-card">
                        <h1>Подорожуйте з Сум до Позанані на зручних автобусах UkraineBus</h1>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="info-img">
                                    <img src="/assets/images/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="mini-info">
                                    <h3>Суми - Познань</h3>
                                    <div class="cities">
                                        <p><i class="fas fa-map-marker-alt"></i> Суми-Київ-Сарни-Ковель-Люблін-Варшава-Лодзь-Познань</p>
                                    </div>
                                    <p><i class="far fa-calendar-alt"></i> Сб</p>
                                    <p><i class="far fa-clock"></i> 7:00 </p>
                                    <span class="routes-price">
										<span>1190</span> грн
									</span>
                                    <!-- <a href="rout-card.html"><button type="button" class="btn btn-primary btn-lg">Купить</button></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="route-info">
                    <h3>Інофрмація про напрям Суми Познань</h3>
                    <p>Компанія "UkraineBus" надає послуги з регулярних пасажирських перевезень з України в Польщу і назад, а так само оформлення всіх необхідних документів</p>

                    <p>У нашому автопарку тільки кращі комфортабельні автобуси VIP-класу. Кожен з них обладнаний кондиціонером, туалетною кімнатою, телефоном, бездротовим інтернетом Wi-Fi, а так само аудіо- та відеосистемами. Нудьгувати в дорозі не доведеться, тому що в нашій великій відеотеці завжди знайдеться краще світове та вітчизняне кіно, а ваші діти зможуть подивитися свої улюблені мультфільми. Ще одна з переваг наших автобусів - вони дуже просторі, між рядами крісел витримано максимально комфортну відстань. При бажанні ви легко відкине спинку м'якого крісла і будете насолоджуватися поїздкою. Протягом всього маршруту ви зможете безкоштовно випити гарячий чай, каву та інші напоями. Завдяки професіоналізму наших водіїв і найвищим рівнем обслуговування, багато годин шляху пролетять непомітно і з задоволенням!</p>


                    <p>Маршрут прямування з України в Польщу, по якому курсує транспорт з Сум, також можна сісти на автобус в таких містах: Київ, Сарни, Ковель, Люблін, Варшава, Лодзь, проходить практично через всю Польщу. Практично безшумний міжнародний автобан, по якому здійснюється пересування, дозволить насолодитися поїздкою і одночасно, відпочити в зручному і комфортному кріслі автобуса.</p>

                    <p>Маршрут суми-познань має тривалість близько 1500 км, що займає приблизно 28 годин, проведених в дорозі. Розклад автобусів суми-познань складено таким чином, що основна частина проведеного в салоні часу розрахована на нічну пору, щоб максимально знизити стомлюваність.
                        Наші транспортні засоби обладнані всіма необхідними елементами, які гарантують приємну поїздку: відкидні сидіння, кондиціонер, телевізор і аудіосистема, туалет, холодильник. Якщо Вам необхідно проїхати маршрутом Суми - Позанань автобус компанії "UkraineBus" - кращий засіб для досягнення цієї мети!</p>
                </div>
            </div>
        </div>
        <div class="conteiner-fluid">
            <div class="routes-buy">
                <div class="container">
                    <div class="card-schedule">
                        <h3>Розклад руху автобуса</h3>
                        <p class="gray-text"> Час руху автобуса - 28 годин</p>
                        <table class="table table-hover ">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Зупинка</th>
                                <th scope="col">Прибуття</th>
                                <th scope="col">Відправлення</th>
                                <th scope="col">Стоянка, хв</th>
                                <th scope="col">Відстань, км</th>
                                <!-- <th scope="col">Вартість, грн</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Суми АС <br> <span class="gray-text"> вул. С.Бандери, 40</span></td>
                                <td>6<sup>50</sup></td>
                                <td>7<sup>00</sup></td>
                                <td>10</td>
                                <td>0</td>
                                <!-- <td>-</td> -->

                            </tr>
                            <tr>
                                <td scope="row">Київ, Видубичі АС <br> <span class="gray-text"> Набережно-Печерська дорога, 10</span></td>
                                <td>13<sup>30</sup></td>
                                <td>13<sup>40</sup></td>
                                <td>10</td>
                                <td>360</td>
                                <!-- <td>305</td> -->

                            </tr>
                            <tr>
                                <td scope="row">Сарни АС <br> <span class="gray-text"> вул. Білгородська, 39</span></td>
                                <td>18<sup>35</sup></td>
                                <td>18<sup>45</sup></td>
                                <td>10</td>
                                <td>676</td>
                                <!-- <td>345</td> -->
                            </tr>
                            <tr>
                                <td scope="row">Ковель АС <br> <span class="gray-text"> вул. Л. Українки, 40</span></td>
                                <td>21<sup>10</sup></td>
                                <td>21<sup>20</sup></td>
                                <td>10</td>
                                <td>819</td>
                                <!-- <td>460</td> -->
                            </tr>
                            <tr>
                                <td scope="row">ПП Ягодин </td>
                                <td>22<sup>10</sup></td>
                                <td>23<sup>10</sup></td>
                                <td>60</td>
                                <td>877</td>
                                <!-- <td>-</td> -->
                            </tr>

                            <tr>
                                <td colspan="5" align="center">Різниця в часі - 1 година</td>
                            </tr>

                            <tr>
                                <td scope="row">ПП "Дорохуск"</td>
                                <td>22<sup>15</sup></td>
                                <td>23<sup>15</sup></td>
                                <td>60</td>
                                <td>877</td>
                                <!-- <td>-</td> -->
                            </tr>
                            <tr>
                                <td scope="row">Люблін АС <br> <span class="gray-text"> вул. Тисячоліття, 6</span></td>
                                <td>00<sup>45</sup></td>
                                <td>00<sup>55</sup></td>
                                <td>10</td>
                                <td>979</td>
                                <!-- <td>845</td> -->
                            </tr>
                            <tr>
                                <td scope="row">Варшава АС Західна<br> <span class="gray-text"> вул. Єрусалимська, 144</span></td>
                                <td>3<sup>50</sup></td>
                                <td>4<sup>00</sup></td>
                                <td>10</td>
                                <td>1150</td>
                                <!-- <td>1000</td> -->
                            </tr>
                            <tr>
                                <td scope="row">Лодзь АС</td>
                                <td>6<sup>20</sup></td>
                                <td>6<sup>30</sup></td>
                                <td>10</td>
                                <td>1289</td>
                                <!-- <td>1075</td> -->
                            </tr>
                            <tr>
                                <td scope="row">Познань АС</td>
                                <td>10<sup>00</sup></td>
                                <td>-</td>
                                <td>-</td>
                                <td>1504</td>
                                <!-- <td>1190</td> -->
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="popular-routes">
                    <h3>Популярні напрями</h3>
                    <a href="rout-card2.html">Познань - Суми</a>
                </div>
            </div>
        </div>
        </div>
        <div class="conteiner-fluid">
            <div class="routes-buy">
                <div class="container">
                    <h3>Придбати квиток на автобус Суми - Познань</h3>
                    <div id="route"></div>
                    <!--


                    <div class="routes-buy2">
                        <p class="gray-text"><span class="step">Крок 1</span> / Крок 2 / Крок 3</p>
<div id="checkout">
    <div id="checkout_wrapper"></div>
</div>
                        <a href="#">Далі</a>
                    </div> -->
                </div>
            </div>
        </div>
    </main>
@endsection