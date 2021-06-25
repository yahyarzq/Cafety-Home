<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>House Cafe | @yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="mainpage/css/style.css" rel="stylesheet" />
	<link href="mainpage/css/all.min.css" rel="stylesheet" />
</head>


<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="mainpage/img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="mainpage/img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">House Cafe</h1>
								<h6 class="tm-site-description">Siap melayani anda</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">

								<li class="tm-nav-li"><a href="/" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="/about" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="/contact" class="tm-nav-link">Contact</a></li>

							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		@yield('content')
		@foreach ($homepages as $item)
		<footer class="tm-footer text-center">
			<p>{{$item->fotter}}</p>
		</footer>
		@endforeach
	</div>
	<script src="mainpage/js/jquery.min.js"></script>
	<script src="mainpage/js/parallax.min.js"></script>
	<script>
		$(document).ready(function () {
			// Handle click on paging links
			$('.tm-paging-link').click(function (e) {
				e.preventDefault();
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>

</html>
