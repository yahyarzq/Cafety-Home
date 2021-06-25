@extends('mainpage.layout.master')
@section('title','Home')
@section('content')

	
		<main>

	

			@foreach ($homepages as $item)
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">{{ $item->title1}}</h2>
				<p class="col-12 text-center">{{ $item->deskripsi1}}</p>
			</header>
			@endforeach
		
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Coffe</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Food</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Desserts</a></li>
					</ul>
				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-coffe" class="tm-gallery-page">

					@foreach ($coffes as $item)
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('mainpage/img/gallery/' . $item->foto) }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">{{ $item->judul}}</h4>
								<p class="tm-gallery-description">{{ $item->deskripsi}}</p>
								<p class="tm-gallery-price">{{ $item->harga}}</p>
							</figcaption>
						</figure>
					</article>
					@endforeach

			

					

				</div> <!-- gallery page 1 -->

				<!-- gallery page 2 -->
				<div id="tm-gallery-page-food" class="tm-gallery-page hidden">

					@foreach ($foods as $item)
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('mainpage/img/gallery/' . $item->foto) }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">{{ $item->judul}}</h4>
								<p class="tm-gallery-description">{{ $item->deskripsi}}</p>
								<p class="tm-gallery-price">{{ $item->harga}}</p>
							</figcaption>
						</figure>
					</article>
					@endforeach

				</div> <!-- gallery page 2 -->

				<!-- gallery page 3 -->
				<div id="tm-gallery-page-desserts" class="tm-gallery-page hidden">

					@foreach ($desserts as $item)
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="{{ asset('mainpage/img/gallery/' . $item->foto) }}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">{{ $item->judul}}</h4>
								<p class="tm-gallery-description">{{ $item->deskripsi}}</p>
								<p class="tm-gallery-price">{{ $item->harga}}</p>
						</figure>
					</article>
					@endforeach

				</div> <!-- gallery page 3 -->
				<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="mainpage/img/01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">

						@foreach ($homepages as $item)
						<div class="tm-description-box">
							<h4 class="tm-gallery-title">{{ $item->title2}}</h4>
							<p class="tm-mb-45">{{ $item->deskripsi2}} </p>
							<a href="about.php" class="tm-btn tm-btn-default tm-right">Read More</a>
						</div>
						@endforeach

					</div>
				</div>
			</div>
			</div>
		</main>
		
@endsection
		