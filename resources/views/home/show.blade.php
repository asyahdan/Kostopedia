<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{asset('favicon.png')}}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

	<title>Kostopedia &mdash; Ayo Cari Kostan Idamanmu Di Kostopedia</title>
</head>
<body>

@include('home.header')


	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">{{ $product->title }}</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="/">Beranda</a></li>
							<li class="breadcrumb-item "><a href="properties.html">Informasi</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">{{ $product->title }}</li>
						</ol>
					</nav>


				</div>
			</div>


		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
						@if ($product)
    						<a href="{{ route('details', ['id' => $product->id]) }}" class="img">
        						<img src="/products/{{ $product->image }}" alt="Image" class="img-fluid">
    						</a>
						@else
    						<p>Produk tidak ditemukan.</p>
						@endif

						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<h2 class="heading text-primary">{{ $product->title }}</h2>
					<p class="text-black-50">{{ $product->description }}</p>

					<div class="specs d-flex mb-4">
                    	<span class="d-block d-flex align-items-center me-3">
                        	<span class="icon-bed me-2"></span>
                        	<span class="caption">{{ $product->beds }} beds</span>
                    	</span>
                    	<span class="d-block d-flex align-items-center">
                        	<span class="icon-bath me-2"></span>
                        	<span class="caption">{{ $product->baths }} baths</span>
                    	</span>
                	</div>
					<div class="property-content">
						<div class="price mb-2"><span>{{ $product->price }}</span></div>
						<span class="d-block mb-2 text-black-50">{{ $product->category }}</span>
						<span class="d-block mb-2 text-black-50">{{ $product->ukurankamar }}</span>
					</div>
					
					<div class="d-block agent-box p-5">
						<div class="img mb-4">
							<img src="{{ asset('images/person_2-min.jpg') }}" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="mb-0">{{ $product->namapemilik }}</h3>
							<ul>
								<!-- Social Media Links -->
								<a href="https://wa.me/{{ $product->phone }}" class="floating" target="_blank">
									<i class="fab fa-whatsapp fab-icon"></i>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('home.footer')

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
  </html>
