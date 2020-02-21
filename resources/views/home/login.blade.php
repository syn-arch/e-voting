<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Page</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/b4/css/bootstrap.min.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/fa/css/all.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
</head>
<body>

	<div class="bg-login">
		<div class="gradient">
			<div class="h10"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="h10"></div>
						<div class="bg-light p-5 shadow">
							<h2 class="text-center">Login Pemilih</h2>
							<p class="text-center">Minta bantuan kepada petugas untuk scan barcode yang sudah Anda terima!</p>

							<form action="{{ route('login_action') }}" method="POST">
								@csrf
								<div class="form-group">
								  <label for="barcode">Barcode</label>
								  <input autocomplete="off" autofocus="" type="number" name="barcode" id="barcode" class="form-control" placeholder="Barcode">
								  @if($errors->has('barcode'))
								  <small style="color:red;">{{$errors->first('barcode')}}</small>
								  @endif
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-subs">
										Login
									</button>
								</div>
							</form>
							<p class="text-center copy-login">&copy; copyright 2019 by korlabbc make with <i class="fa fa-heart text-danger"></i></p>	

						</div>
						<div class="h20"></div>
						<div class="h10"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="{{ url('frontend/vendor/b4/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/vendor/fa/js/all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.3/sweetalert.min.js"></script>
@include('sweet::alert')

</body>
</html>