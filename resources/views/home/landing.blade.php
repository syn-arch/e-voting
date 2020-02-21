<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Landing Page</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/b4/css/bootstrap.min.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/fa/css/all.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg shadow fixed-top navbar-light">

	<div class="container">
		<a href="#home" class="navbar-brand text-white">
			<img src="{{ url('frontend/assets/img/bbc.png') }}" alt="Logo BBC" class="img-fluid logo-bbc" width="60">
		BBC EVOTING</a>

	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse" id="my-navbar">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item mt-3">
				<a href="#home" class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item mt-3">
				<a href="#about" class="nav-link text-white">About</a>
			</li>
			<li class="nav-item mt-3">
				<a href="#contact" class="nav-link text-white">Contact</a>
			</li>
			<li class="nav-item sign-button btn btn-light shadow ml-3 my-2">
				<a href="{{ route('login') }}" class="nav-link text-dark link-button-sign">Sign In</a>
			</li>
		</ul>
	</div>
	</div>
</nav>

<div class="header" id="home">
	<div class="gradient">
		<div class="container text-white">

			<div class="row">
				<div class="col-md-6">
					<div class="h20"></div>
					<div class="h5"></div>
					<h1>Selamat Datang</h1>
					<p>E-voting berasal dari kata electronic voting yang mengacu pada penggunaan teknologi informasi pada pelaksanaan pemungutan suara. Kondisi penerapan dan teknologi e-voting terus berubah seiring perkembangan teknologi informasi yang sangat cepat. Kendala-kendala e-voting yang pernah terjadi di berbagai negara yang pernah dan sedang menerapkannya menjadi penyempurnaan e-voting selanjutnya.</p>
					<p>Salah satu segi positif dari penerapan e-voting saat ini adalah makin murahnya perangkat keras yang digunakan dan makin terbukanya perangkat lunak yang digunakan sehingga biaya pelaksanaan e-voting makin murah dari waktu ke waktu.</p>
					<a href="/login" class="btn btn-light sign-button px-5 py-2 shadow">
						Login
					</a>
				</div>
				<div class="col-md-6 col-lg-none">
					<div class="h20"></div>
					<img src="{{ url('frontend/assets/img/img header.png') }}" alt="img vektor vote" class="img-fluid">
				</div>
			</div>

			<div class="h20"></div>
			
		</div>
	</div>
</div>

<div class="about" id="about">
	<div class="container pt-5 pb-5 text-center mb-0">
		<h1 class="about-us">About Us</h1>
		<p class="">
			Inovasi baru untuk merubah SMK Budi Bakti Ciwidey ke era globalisasi yang lebih maju di zaman teknologi 4.0
		</p>

		<div class="row mt-5">
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/mpk.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">MPK</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/osisbbc.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">OSIS</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/osti.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">KORLAB</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/dkv.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">DKV</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/rpl.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">RPL</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
			<div class="col-md-4 mt-4">
				<img src="{{ url('frontend/assets/img/bdp.png') }}" alt="Logo Osis" class="img-fluid" width="200">
				<h2 class="mt-3">BDP</h2>
				<h6>Smk Budi Bakti Ciwidey</h6>
			</div>
		</div>
	</div>
</div>

<div class="contact" id="contact">
	<div class="container pt-5">
		<h1 class="text-center contact-us">Contact Us</h1>
		<p class="text-center">
			Kami sangat menerima kritik dan saran dari Anda supaya kami menjadi lebih baik lagi. Kritik dan saran dapat di sampaikan lewat sosial media yang ada di bawah ini.
		</p>
		
		<div class="h5"></div>

		<div class="row mt-5">
			<div class="col-md-5 offset-lg-1">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/ig.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">@info.smkbbc</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/ig.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">@mpk.smkbbc</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-5 offset-lg-1">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/email.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">smkbudibakti@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/ig.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">@osis.bbc</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-5 offset-lg-1">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/ig.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">@korlab.smkbbc</p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-2">
						<img src="{{ url('frontend/assets/img/ig.png') }}" alt="Instagram" class="img-fluid d-flex" width="50">
					</div>
					<div class="col-md-5 offset-lg-1 mt-2">
						<p class="d-inline-block">@dkvsmkbudibakti</p>
					</div>
				</div>
			</div>
		</div>

		<div class="h10"></div>
	</div>
</div>

<div class="footer bg-dark text-white">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<h3>BBC EVOTING SYSTEM</h3>
				<p class="text-justify small">
					Salah satu segi positif dari penerapan e-voting saat ini adalah makin murahnya perangkat keras yang digunakan dan makin terbukanya perangkat lunak yang digunakan sehingga biaya pelaksanaan e-voting makin murah dari waktu ke waktu.
				</p>
			</div>
			<div class="col-md-3 offset-1">
				<h4>About Us</h4>
				<ul class="list-unstyled">
					<li class="list-item small">
						<h6>SMK BUDI BAKTI CIWIDEY</h6>
						<h6>MPK BBC</h6>
						<h6>OSIS BBC</h6>
						<h6>KORLAB BBC</h6>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Subscribe</h4>
				<p class="small">Masukan email anda pada form dibawah.</p>
				<form action="" class="form-inline">
					<div class="input-group shadow">
						<input type="text" class="form-control" placeholder="yourmail@example.com">
						<div class="input-group-append">
							<button type="submit" class="btn text-center btn-subs">GO</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="copyright">
	<div class="container text-center">
		<p class="mb-0 py-3 small">&copy; copyright 2019 by korlabbc make with <i class="fa fa-heart text-danger"></i></p>
	</div>
</div>

<script src="{{ url('frontend/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('frontend/vendor/b4/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/vendor/fa/js/all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.3/sweetalert.min.js"></script>
@include('sweet::alert')
<script>
	$(function(){
		$(document).on('scroll', function(){
			var nav = $('.navbar');
			nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());

			if ($(this).scrollTop() > nav.height()) {
				$('.nav-link').removeClass('text-white');
				$('.navbar-brand').removeClass('text-white');
				$('.sign-button').removeClass('shadow');
				$('.sign-button').addClass('btn-subs');
				$('.link-button-sign').removeClass('text-dark');
				$('.link-button-sign').addClass('text-white');
				$('.logo-bbc').addClass('invert');
			}else{
				$('.nav-link').addClass('text-white');
				$('.navbar-brand').addClass('text-white');
				$('.sign-button').addClass('shadow');
				$('.sign-button').removeClass('btn-subs');
				$('.link-button-sign').addClass('text-dark');
				$('.logo-bbc').removeClass('invert');
			}
		});

		$("a").on('click', function(event) {
		   // Make sure this.hash has a value before overriding default behavior
		   if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top - 85
		      }, 800, function(){

		      });
		   } // End if
		});

	});
</script>
</body>
</html>