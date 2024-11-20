<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	@include('home.css')

	<title>Kostopedia &mdash; Ayo Cari Kostan Idamanmu Di Kostopedia</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
				<a href="/" class="logo m-0 float-start" style="margin-right: 20px;">
    				<img src="https://raw.githubusercontent.com/asyahdan/Pemrograman-Web/main/simplelogo1.png" width="35" height="35">
    				Kostopedia
				</a>
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="/">Beranda</a></li>
						<li><a href="/services">Daftar Kostmu sekarang!</a></li>
                        @if (Route::has('login'))

                                @auth
                                    <li> <a
                                        href="{{ url('/admin/dashboard') }}"
                                    >
                                        Dashboard
                                    </a> </li>
                                @else
                                    <li> <a
                                        href="{{ route('login') }}"
                                    >
                                        Log in
                                    </a> </li>

                                    @if (Route::has('register'))
                                        <li> <a
                                            href="{{ route('register') }}"
                                        >
                                            Register
                                        </a> </li>
                                    @endif
                                @endauth
                        @endif
                    </ul>

                    <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Tentang Kami</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="/">Beranda</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Tentang Kami</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row text-left mb-5">
				<div class="col-12">
					<h2 class="font-weight-bold heading text-primary mb-4">Tentang Kami</h2>
				</div>
				<div class="col-lg-6">
					<p class="text-black-50">Kostopedia adalah sebuah website yang dikembangkan sebagai layanan penyedia penyewaan kost dengan fasilitas. Kostopedia adalah permainan kata yang menggabungkan "kost" dengan "pedia". Dengan demikian, nama "Kostopedia" menggambarkan konsep tempat tinggal sementara yang ideal atau impian bagi para pencari kost. Dengan demikian, Kostopedia menggambarkan konsep tempat tinggal sementara yang ideal atau impian bagi mereka yang membutuhkan kost. Website ini tidak hanya menawarkan berbagai pilihan kost dengan fasilitas yang beragam, tetapi juga memberikan informasi mendetail mengenai setiap kost, seperti lokasi, harga, fasilitas, dan ulasan dari penyewa sebelumnya. Dengan user interface yang ramah pengguna dan fitur pencarian yang canggih, Kostopedia membantu para pencari kost menemukan tempat tinggal yang sesuai dengan kebutuhan dan preferensi mereka dengan mudah dan efisien.  </p>
				</div>
				<div class="col-lg-6">
					
					<p class="text-black-50">Website ini berangkat dari kebutuhan untuk memudahkan pencarian tempat tinggal sementara secara efisien. Proses pencarian kost secara konvensional sering kali memakan waktu, tenaga, dan informasi yang didapatkan sering tidak akurat. Dengan meningkatnya penggunaan smartphone dan trend digitalisasi layanan, website ini hadir sebagai solusi inovatif. Website ini menyediakan informasi yang lengkap, akurat, dan mudah diakses. Dengan demikian, website ini diharapkan dapat menjadi solusi efektif dalam memenuhi kebutuhan pencarian kost di era digital. </p>
				</div>
			</div>

		</div>
	</div>

	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Kost/Kontrakan Berkualitas</h3>
							<p class="text-black-50">Temukan tempat tinggal yang memenuhi berbagai kriteriamu.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Kost/Kontrakan Populer</h3>
							<p class="text-black-50">Temukan tempat tinggal populer di area sekitar.</p>   
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Mudah dan Aman</h3>
							<p class="text-black-50">Temukan tempat tinggal dengan mudah dan aman melalui layar Anda.</p>   
						</div>
					</div>
				</div>
			</div>
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
