<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Barcode Generator</title>
    <!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/b4/css/bootstrap.min.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ url('frontend/vendor/fa/css/all.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
   </head>
<body>
<div class="container text-center p-3">
	<div class="row">
		@foreach($pemilih as $row)
		<div class="col-md-3 mt-5">
			 <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($row->barcode, 'C39')}}" alt="Barcode" class="img-fluid">
		</div>
		@endforeach
	</div>
</div>
<script src="{{ url('frontend/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ url('frontend/vendor/b4/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/vendor/fa/js/all.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>