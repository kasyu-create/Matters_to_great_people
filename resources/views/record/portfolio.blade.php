@extends('layout.layout')
@section('content')
		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">ジャンル　　　　　　　　　　　　<a href="/create">新規作成</a></h2>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
				@foreach ($genres as $genre)
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href ="/show/{{$genre->id}}">
							<img src="{{ asset('/storage/app/'.$genre->img_path) }}" alt="" class="img-responsive">
							<h3 class="fh5co-work-title">{{$genre->name}}</h3>
						</a>
					</div>
					<div class="clearfix visible-md-block"></div>
				@endforeach
				</div>
			</div>
		

			<!-- <div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Start Your Project Now!</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline">Get Started</a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

		</div>
@endsection

