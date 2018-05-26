@extends('layout')

@section('content')
<header>
	<div class="banner-line">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="/img/banner3.jpg" alt=""></div>
				<div class="swiper-slide"><img src="/img/banner2.jpg" alt=""></div>
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
								<li><img src="/img/driver.png" alt=""></li>
								<li>Досвідчені водії  <br> для вашої безпеки <!-- <a href="">подробнее</a> --></li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4">
							<ul>
								<li><img src="/img/wallet.png" alt=""></li>
								<li>Найкращі ціни <br> для вашого гаманця <!-- <a href="">подробнее</a> --></li>
							</ul>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4">
							<ul>
								<li><img src="/img/bus.png" alt=""></li>
								<li>Европейські автобуси  <br> для комфортної дороги <!-- <a href="">подробнее</a> --></li>
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
						<h1>Автобусні перевезення з України в Польщу</h1>
						<p>Ми гарантуємо вам високий рівень комфорту і безеки.Ми надаємо туристичні послуги та оренду автобусів. Високий комфорт і привабливі ціни дозволили нам скласти прайс-лист таким чином, щоб забезпечити вам максимально можливе співвідношення ціни і якості.</p>
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
						<h3>Познайомтеся з нашими цінами!</h3>
						<p>Ми пропонуємо одні з найвигідніших тарифів.</p>
					</div>
					<!-- <div class="col-xl-4 col-lg-4 col-md-4">
						<button type="button" class="btn btn-warning btn-lg">Проверить</button>
					</div> -->
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
							<h5>Пасажирські перевезення</h5>
							<p>З нами ваша подорож буде комфортною і за вигідними цінами</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="advantages-item">
							<img src="/img/bus.png" alt="">
							<h5>Аренда автобусів</h5>
							<p>Ми надаємо в оренду наші автобуси за оптимальними цінами</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="advantages-item">
							<img src="/img/package.png" alt="">
							<h5>Перевезення посилок</h5>
							<p>Доступний, швидкий, дешевий спосіб відправити свої посилки</p>
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
						<h3>З нами Ваші <br>поїздки будуть безпечними</h3>
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
					@foreach($trips as $trips)
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href="{{route('trip.show', $trips->slug)}}">
							<div class="route-item">
								<img src="{{$trips->getImage()}}" alt="">
								<h5>{{$trips->title}}</h5>
							</div>
						</a>
					</div>	
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>
@endsection

