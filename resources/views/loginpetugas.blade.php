<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Login : msAntrian v.1.0.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login/atasan/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/login/atasan/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login/atasan/custom.min.css">
  </head>
  
  <body style="background-color:#FFF; background-image:url({{ $image1 }});">

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4" align="center">
				<img src="{{ $image2 }}" height="60"><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<div class="card card-default">
					<div class="card-header"><strong>Login Petugas</strong></div>
					<div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
														<div class="form-group row">
								<label class="col-md-4 col-form-label" for="username">Username</label>
								<div class="col-md-8">
									<input type="text" name="username" class="form-control" id="username" placeholder="Username" required="required">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-4 control-label" for="password">Password</label>
								<div class="col-md-8">
									<input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
								</div>
							</div>
							<div class="form-group row">
														<label class="col-form-label col-sm-4" for="kode_akses">1 + 7 = </label>
							<div class="col-sm-8">
								<input type="hidden" name="kode" value="8">
								<input type="number" name="kode_akses" class="form-control" id="kode_akses" placeholder="Hasil Penjumlahan" required="required">
							</div>
						  </div>
							<div class="form-group row">
								<div class="col-md-8 offset-md-4">
									<button type="submit" class="btn btn-sm btn-info">Login</button>
									<button type="reset" class="btn btn-sm btn-warning">Reset</button>
								</div>
							</div>
						</form>
					</div>
				</div> 
			</div>
		</div>
	</div>
	{{-- <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script> --}}
	
  </body>

</html>
