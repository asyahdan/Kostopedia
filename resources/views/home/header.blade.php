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
						<li><a href="/about">Tentang Kami</a></li>

						@if (Route::has('login'))

                                @auth
                                    <li> <a
                                        href="{{ url('/dashboard') }}"
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