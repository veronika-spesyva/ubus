@extends('layout')

@section('content')
		<div class="conteiner-fluid">
			<div class="routes-buy">
				<div class="container">
					<div class="rout-card">
						<h1>{{$trips->title_h1}}</h1>
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="info-img">
									<img src="/{{$trips->getImage()}}" alt="">
								</div>
							</div> 
							<div class="col-xl-8 col-lg-8 col-md-8">
								<div class="mini-info">
									<h3>{{$trips->title}}</h3>
									<div class="cities">
										<p><i class="fas fa-map-marker-alt"></i> {{$trips->route}}</p>
									</div>
									<p><i class="far fa-calendar-alt"></i> Сб</p>
									<p><i class="far fa-clock"></i> 7:00 </p>
									<span class="routes-price">
										<span>{{$trips->price}}</span> грн
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
					{!! $trips->content !!}
				</div>
			</div>
			<div class="conteiner-fluid">
				<div class="routes-buy">
					<div class="container">
						<div class="card-schedule">
							{!! $trips->schedule !!}
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection