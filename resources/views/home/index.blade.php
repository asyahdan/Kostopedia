<!doctype html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>

    @include('home.header')

	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Yuk cari kost idaman mu sekarang!</h1>
					<form action="{{ url('search') }}" method="get" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
    					<input type="search" class="form-control" name="search" placeholder="Masukkan Alamat contoh : Arzimar, bangbarung">
    					<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	@include('home.slider')

	

	@include('home.footer')


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>
