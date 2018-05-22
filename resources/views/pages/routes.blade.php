@extends('layout')

@section('content')

<main>
	<div class="routes">
		<div class="container">
			<div class="post">
			<h5>Польща</h5>
				<div class="row">
					@foreach($trips as $trips)
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href="{{route('trip.show', $trips->slug)}}">
							<div class="route-item">
								<img src="{{$trips->getImage()}}" alt="">
								<h5>{{$trips->title}}</h5>
							</div>
						</a>
						<b>{{$trips->price}} грн</b>
					</div>	
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>

@endsection