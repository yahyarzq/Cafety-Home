@extends('mainpage.layout.master')
@section('title','About')
@section('content')


@foreach ($abouts as $item)
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">{{ $item->title1}}</h2>
				<p class="col-12 text-center">{{ $item->deskripsi1}}
				</p>
	
			</header>

			<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="mainpage/img/about-05.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner tm-features">
				<div class="row">
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-coffee tm-feature-icon"></i>
							<p class="tm-feature-description">{{ $item->artikel1}}</p>
							<a href="index.html" class="tm-btn tm-btn-primary">Read More</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-seedling tm-feature-icon"></i>
							<p class="tm-feature-description">{{ $item->artikel2}}</p>
							<a href="index.html" class="tm-btn tm-btn-success">Read More</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="tm-feature">
							<i class="fas fa-4x fa-cocktail tm-feature-icon"></i>
							<p class="tm-feature-description">{{ $item->artikel3}}</p>
							<a href="index.html" class="tm-btn tm-btn-danger">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							
							<div class="tm-history-text">
								<h4 class="tm-history-title">{{ $item->title2}}</h4>
								<p class="tm-mb-p">
									{{ $item->deskripsi2}}
								</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</main>	
@endforeach
@endsection