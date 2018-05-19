@extends('layout')

@section('content')
<header>
		<div class="banner-line">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide"><img src="/img/slide1.jpg" alt=""></div>
					<div class="swiper-slide"><img src="/img/slide2.jpg" alt=""></div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
		<div class="yellow-line">
			<div class="container">
				<div class="post">
				<div class="row align-items-center">
					<div class="col-xl-4 col-lg-4 col-md-4">
						<ul>
							<li><img src="/img/calendar.png" alt=""></li>
							<li>Расписание автобусов <br> <a href="">подробнее</a></li>
						</ul>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<ul>
							<li><img src="/img/wallet.png" alt=""></li>
							<li>Купить билеты <br> <a href="">подробнее</a></li>
						</ul>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<ul>
							<li><img src="/img/time.png" alt=""></li>
							<li>Бронировать билеты <br> <a href="">подробнее</a></li>
						</ul>
					</div>
				</div>
			</div>
			</div>
		</div>
	</header>
	<main>
		<div class="about-company">
			<div class="container">
				<div class="post">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<img src="/img/bus.jpg" alt="">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<h3>О нас</h3>
						<p>Мы гарантируем вам высокий уровень комфорта и безопасности.</p>
						<p>Мы предоставляем туристические услуги и аренду. Высокий комфорт и привлекательные цены позволили нам составить прайс-лист таким образом, чтобы обеспечить вам максимально возможное соотношение цены и качества.</p>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="proposition">
			<div class="container">
				<div class="post">
				<div class="row align-items-center">
					<div class="col-xl-8 col-lg-8 col-md-8">
						<h3>Познакомтесь с нашими ценами!</h3>
						<p>Мы предлагаем одни из самых выгодных тарифов.</p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<button type="button" class="btn btn-warning btn-lg">Проверить</button>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="advantages">
			<div class="container">
				<div class="post">
				<div class="row align-items-center">
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="advantages-item">
							<img src="/img/route.png" alt="">
							<h5>Пассажирские перевозки</h5>
							<p>С нами ваше путешествие будет комфортным и по выгодным ценам</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="advantages-item">
							<img src="/img/bus.png" alt="">
							<h5>Аренда автобусов</h5>
							<p>Мы предоставляем в аренду наши автобусы по оптимальным ценам</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="advantages-item">
							<img src="/img/package.png" alt="">
							<h5>Транспортировка посылок</h5>
							<p>Доступный, быстрый, дешевый способ отправить свои посылки</p>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="way">
			<div class="container">
				<div class="post">
				<div class="row">
					<div>
						<h3>С нами Ваши <br>поездки будут безопасными</h3>
					</div>
					<div class="yellow-hr"></div>
				</div>
			</div>
			</div>
		</div>
		<div class="route">
			<div class="container">
				<div class="post">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href=""><div class="route-item">
							<img src="/img/1.jpg" alt="">
							<h5>Сумы - Познань</h5>
						</div></a>
					</div>	
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href=""><div class="route-item">
							<img src="/img/2.jpg" alt="">
							<h5>Познань - Сумы</h5>
						</div></a>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href=""><div class="route-item">
							<img src="/img/3.jpg" alt="">
							<h5>Скоро новое направление</h5>
						</div></a>
					</div>
				</div>
			</div>
		</div>
		</div>
	</main>
@endsection

