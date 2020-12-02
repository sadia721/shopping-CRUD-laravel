@extends('layout')	
@section('content')	
		<!-- Banner -->
			<div id="banner">
				<div class="container">
	
					<section>
						<span class="fa fa-cubes"></span>
						<header>
							<h2>HUB</h2>
							<span class="byline">Gallery</span>
						</header>
						<a href="#" class="button medium">Get Now</a>
					</section>	
				</div>
			</div>
		<!-- /Banner -->

	</div>
	<!-- Featured -->
		<div id="featured">
			<div class="container">
				
				<div class="row mb-5">
					@foreach($records as $record)
						<section class="4u mt-5">
							<a href="#" class="image full"><img src="{{'public/images/'.$record->image }}" width="300px;" height="300px;" alt="not found"></a>
								<h2>name  {{$record->name}}</h2>
								<h2>Price {{$record->price}} $</h2>
								<h2>Color {{$record->color}}</h2>
								<h2>size  {{$record->size}}</h2>
							<p><a href="#" class="button">View Full Details</a></p>
						</section>
					@endforeach
				</div>
			</div>
		</div>
	<!-- /Featured -->

@endsection('content')
		