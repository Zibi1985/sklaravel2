@extends('master')
@section('content')
	<div class="videos-header card">
		<h2>Najnowsze filmy</h2>
	</div>
	
	@if(Session::has('video_created'))
		<div class="card alert alert-success">
			{{ Session::get('video_created') }}
		</div>
	@endif
	
	<div class="row">
		@if(count($videos) >= 1)
			@foreach( $videos as $video)
				<!-- Single video -->
				<div class="col-xs-12 col-md-6 col-lg-4 single-video">
					<div class="card">
						
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="{{ $video->url }}?showinfo=0" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="card-content">
							<a href="/videos/{{ $video->id }}">
								<h4>{{ $video->title }}</h4>
							</a>
							<p>{{ $video->description }}</p>
							<span class="upper-label">Dodał</span>
							<span class="video-author">{{ $video->user->name }}</span>
						</div>
					
					</div>
				</div>
		@endforeach
		@else
			<p>Brak rekordów w bazie.</p>
		@endif
	</div>
@endsection
