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

    <title>Kostopedia &mdash; daftar kost</title>
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
						<li class="active"></li>
						<li><a href="/about">Tentang Kami</a></li>
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

    <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg');">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Daftar Kost</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item "><a href="/">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Form iframe -->
    <div class="google-form-container">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe-m3mPwNoScPtDYNFzjjWkFQtbNc3aTUl7_N82K5FaHMRxyQ/viewform?usp=sf_link" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
    <!-- End Google Form iframe -->

    <div class="site-footer">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Kostopedia &mdash; SvIPB <a href="https://untree.co">Octonity</a> <!-- License information: https://untree.co/license/ -->
                    </p>

            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->


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
