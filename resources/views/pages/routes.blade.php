@extends('layout')

@section('content')

<main>
	<div class="routes">
		<div class="container">
			<div class="post">
			<h5>Польща</h5>
				<div class="row">
					@foreach($trips as $trip)
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href="{{route('trip.show', $trip->slug)}}">
							<div class="route-item">
								<img src="/{{$trip->getImage()}}" alt="">
								<h5>{{$trip->title}}</h5>
							</div>
						</a>
						<b>{{$trip->price}} грн</b>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>

@endsection