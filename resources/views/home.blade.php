<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>msAntrian v.1.0.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.gritter.css">
	<link rel="stylesheet" type="text/css" href="/css/prism-okaidia.css">

	{{-- {{ HTML::style('css/bootstrap.css'); }}
	{{ HTML::style('css/custom.min.css'); }} --}}
    <style>
		@media screen {
			#print_area { display: none; }
			#print_area.show { display: block; }
		}
		@media print {
			#print_area { display: block !important; }
			
			#navbar { display: none; }
			#logo { display: none; }
			#banner { display: none; }
			#info { display: none; }
			
			body {
				margin:0;
				padding:0;
				background-image: none;
			}
		}
		
    </style>

	<script type="text/javascript">
	window.onload = function() { 
		jam(); 
	}
	function jam() {
		var e = document.getElementById('jam'),
		d = new Date(), h, m, s;
		h = d.getHours();
		m = set(d.getMinutes());
		s = set(d.getSeconds());

		e.innerHTML = h +':'+ m +':'+ s;

		setTimeout('jam()', 1000);
	}

	function set(e) {
		e = e < 10 ? '0'+ e : e;
		return e;
	}
	</script>
  </head>
  
  <body style="background-color:#FFF; background-image:url({{ $image }});">
  
    <div class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
          </ul>
          <ul class="navbar-nav ms-md-auto">
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
		<div class="page-header" id="banner">
			<div class="row">
			  <div class="col-lg-12 col-md-12" align="center">
				<h2>msAntrian Versi 1.0.0</h2>
				<p class="lead"></p>
			  </div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-2 offset-md-2" align="center">
					<a href="anjungan/">
						<button id="service_1" class="btn btn-lg btn-success" style="height: 150px; width:200px; margin-top: 20px;">
							ANJUNGAN
						</button>
					</a>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<a href="layar/">
						<button id="service_2" class="btn btn-lg btn-secondary" style="height: 150px; width:200px; margin-top: 20px;">
							LAYAR
						</button>
					</a>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<a href="petugas/">
						<button id="service_4" class="btn btn-lg btn-info" style="height: 150px; width:200px; margin-top: 20px;">
							PETUGAS
						</button>
					</a>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<a href="atasan/">
						<button id="service_3" class="btn btn-lg btn-primary" style="height: 150px; width:200px; margin-top: 20px;">
							ATASAN
						</button>
					</a>
				</div>
			</div>
			<div class="row">
			  <div class="col-lg-12 col-md-12" align="center">
				<p>&nbsp;</p>
				<p>&copy; 2022. By CV. Cipta Mandiri Solusindo</p>
			  </div>
			</div>
		</div>
    </div>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.gritter.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.print.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/prism.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
  </body>


</html>
