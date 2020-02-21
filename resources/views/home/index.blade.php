<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BBC EVOTING</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/b4/css/bootstrap.min.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/fa/css/all.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

</head>
<body>

<div class="main-header">
	<div class="container pt-3">
		<div class="row">
			<div class="col-2">
				<img src="{{ url('frontend/assets/img/logo.png') }}" alt="Logo BBC" class="img-fluid main-header-img w-100">
			</div>
			<div class="col-10 text-white mt-4">
				<div class="row">
					<div class="col-md-6 pb-3">
						<H2>BBC EVOTING SYSTEM</H2>
						<p>Pemilihan ketua OSIS tahun ajaran 2020/2021</p>
						<p class="min-2 mb-0">SMK BUDI BAKTI CIWIDEY</p>
						<p class="min-2">Jl.Babakan Tiga No.82 Kec.Ciwidey Kab.Bandung</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navar-light bg-light shadow sticky-top">
	<div class="container">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu-index">
			<i class="fa fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="menu-index">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a href="/" class="nav-link text-dark"><i class="fa fa-home"></i> Home</a>
				</li>
				<li class="nav-item">
					<a href="#vote" class="nav-link text-dark"><i class="fa fa-edit"></i> Vote</a>
				</li>
				<li class="nav-item">
					<a href="#petunjuk" class="nav-link text-dark"><i class="fa fa-info"></i> Petunjuk</a>
				</li>
				<li class="nav-item">
					<a href="{{ url('logout') }}" class="nav-link text-dark"><i class="fa fa-sign-out-alt"></i> Keluar</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

@if(Session::get('sukses'))
<div class="container mt-5">
  <div class="alert alert-success alert-dismissible">
    <button class="close" data-dismiss="alert">
      &times;
    </button>
    <h4><i class="fa fa-check"></i> Berhasil</h4>
    <p>{{ Session::get('sukses') }}</p>
  </div>
</div>
@endif


<div class="vote pt-5" id="vote">
	<div class="container">
		<h2 class="text-center">Pilih Kandidat</h2>
		<p class="text-center">Pilihlah kandidat sesuai dengan hati nurani Anda tanpa ada unsur paksaan dari pihak lain.</p>

		<div class="row mt-5">
			@foreach($kandidat as $row)
			<div class="col-md-4">
				<div class="card text-center shadow">
					<div class="card-header btn-subs">
						<h2>{{ strlen($row->no_urut) == 1 ? '0' : '' }}{{ $row->no_urut }}</h2>
					</div>
					<div class="card-body">
						<img src="{{ url('frontend/assets/img/') . '/' . $row->gambar }}" alt="Kandidat OSIS" class="card-img">
						<table class="table table-bordered mt-4">
							<tr>
								<td>Nama</td>
								<td>{{ $row->nm_kandidat }}</td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td>{{ $row->kelas->nm_kelas }}</td>
							</tr>
							<tr>
								<td>Tahun Ajaran</td>
								<td>{{ $row->tahun_ajaran }}</td>
							</tr>
						</table>
					</div>
					<div class="card-footer">
						<a href="<?= url('vote') . '/' . $row->id_kandidat . '/' . $row->tahun_ajaran ?>" class="btn btn-subs btn-block">PILIH</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="petunjuk pt-5 pb-5 mt-5" id="petunjuk">
	<div class="container">
		<h2 class="text-center">Petunjuk</h2>
		<p class="text-center">Berikut adalah petunjuk penggunaan aplikasi E-Voting.</p>

		<div class="container-petunjuk shadow p-5 mt-5">
			<ol>
				<li>Login Kedalam Website</li>
				<li>Masuk ke menu vote pada navigasi</li>
				<li>Pilih kandidat OSIS tahun ajaran 2020/2021</li>
				<li>Setelah muncul pemberitahuan, anda dapat meninggalkan bilik</li>
				<li>Selesai.</li>
			</ol>
		</div>
	</div>
	<div class="h5"></div>
</div>

<div class="footer-main btn-subs text-center">
	<p class="mb-0">&copy; copyright 2019 by korlabbc make with <i class="fa fa-heart text-danger"></i></p>
</div>
<script src="{{ url('frontend/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('frontend/vendor/b4/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/vendor/fa/js/all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.3/sweetalert.min.js"></script>
@include('sweet::alert')
<script>
	$(function(){

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
		        scrollTop: $(hash).offset().top - 30
		      }, 800, function(){

		      });
		   } // End if
		});

	})
</script>
</body>
</html>