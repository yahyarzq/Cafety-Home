@extends('mainpage.layout.master')
@section('title','Contact')
@section('content')

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Contact Page</h2>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="{{ route('messages.store')}}" method="POST" class="tm-contact-form">
							@CSRF
					        <div class="form-group">
					          <input type="text" name="name" class="form-control" placeholder="Name" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Send
					          </button>
					        </div>
						</form>
					</div>
					@foreach ($contacts as $item)
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Our Address</h4>
							
							<address>
								{{ $item->alamat}}
							</address>
							<a href="tel:080-090-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>{{ $item->notlp}}
							</a>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>{{ $item->email}}
							</a>
							<div class="tm-contact-social">
								<a href="https://fb.com/templatemo" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
            

			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d996.3046977411432!2d112.60191361903607!3d-7.926423278073078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1619319700756!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<!-- FAQ -->
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">FAQs</h2>
			
						<div class="tm-accordion">
							@foreach ($faqs as $item)
								
							
							<button class="accordion">{{ $item->question}}</button>
							<div class="panel">
							  <p>{{ $item->answer}}</p>
							</div>
							@endforeach
							
						</div>	
					</div>
				</div>
			</div>
		</main>
@endsection