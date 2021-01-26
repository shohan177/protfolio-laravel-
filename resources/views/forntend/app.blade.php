<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>shohan</title>
	<meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="forntend/asset/images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/animate.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/magnific-popup.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('forntend/asset/css/style.css') }}" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Preloader -->
<div id="preloader">
	<div class="outer">
		<!-- Google Chrome -->
		<div class="infinityChrome">
			<div></div>
			<div></div>
			<div></div>
		</div>

		<!-- Safari and others -->
		<div class="infinity">
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
			<div>
				<span></span>
			</div>
		</div>
		<!-- Stuff -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
			<defs>
				<filter id="goo">
					<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
					<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
					<feBlend in="SourceGraphic" in2="goo" />
				</filter>
			</defs>
		</svg>
	</div>
</div>

<!-- mobile header -->
<header class="mobile-header-2">
	<div class="container">
		<!-- menu icon -->
		<div class="menu-icon d-inline-flex mr-4">
			<button>
				<span></span>
			</button>
		</div>
		<!-- logo image -->
		<div class="site-logo">
			<a href="">
				{{-- <img src="forntend/asset/images/logo.svg" alt="Bolby" /> --}}

			</a>
		</div>
	</div>
</header>

<!-- desktop header -->
<header class="desktop-header-2 d-flex align-items-start flex-column" style="height: 100%">

	<!-- logo image -->
	<div class="site-logo">
		{{-- <a href="{{ route('home') }}">
			<img src="forntend/asset/images/logo-b-light.svg" alt="Bolby" />
		</a> --}}
	</div>

	<!-- main menu -->
	<nav>
		<ul class="vertical-menu scrollspy">
			<li class="active"><a href="#home"><i class="icon-home"></i></a></li>
			<li><a href="#about"><i class="icon-user-following"></i></a></li>
			<li><a href="#services"><i class="icon-briefcase"></i></a></li>
			<li><a href="#experience"><i class="icon-graduation"></i></a></li>
			<li><a href="#works"><i class="icon-layers"></i></a></li>
			<li><a href="#blog"><i class="icon-note"></i></a></li>
			<li><a href="#contact"><i class="icon-bubbles"></i></a></li>
		</ul>
	</nav>

	<!-- site footer -->
	<div class="footer">
		<!-- copyright text -->
		<span class="copyright"></span>
	</div>

</header>

<!-- main layout -->
    @section('body')

    @show

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="{{ asset('forntend/asset/js/jquery-1.12.3.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/popper.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/infinite-scroll.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/slick.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/contact.js') }}"></script>
<script src="{{ asset('forntend/asset/js/validator.js') }}"></script>
<script src="{{ asset('forntend/asset/js/wow.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/morphext.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/parallax.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('forntend/asset/js/custom.js') }}"></script>

</body>


</html>
