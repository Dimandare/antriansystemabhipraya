<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
	<title>Antrian Dashboard | Polres Pati -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/img/polreslogo.png" />
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.gritter.css">
	<link rel="stylesheet" type="text/css" href="/css/prism-okaidia.css">
    <style>	
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
	<script language="JavaScript">
		var tanggallengkap = new String();
		var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
		namahari = namahari.split(" ");
		var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
		namabulan = namabulan.split(" ");
		var tgl = new Date();
		var hari = tgl.getDay();
		var tanggal = tgl.getDate();
		var bulan = tgl.getMonth();
		var tahun = tgl.getFullYear();
		tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
		</script>
  </head>
  
  <body style="background-color:#067b8c; background-image:url();">
  
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-info text-white">
      <div class="container-fluid">
        <a href="index.html" class="navbar-brand" id="logo">
			<img src="/img/logo.png" height="60">
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item" style="font-weight: bold">Jl. A. Yani No.1, Ngarus, Kec. Pati, Kab. Pati<br>Jawa Tengah Kode Pos 59112 Telp. (0295) 381610</li>
          </ul>
          <ul class="navbar-nav ms-md-auto">
            <li class="nav-item">
              <div align="right" style="font-weight: bold">
				<script language='JavaScript'>document.write(tanggallengkap);</script><br>
				  <span id="jam" style="font-size: 30px;">00:00:00</span>
			  </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
	
    <div class="container-fluid">
		<div class="row">
			<div id="last_call_queue" class="col-md-6">
			
			</div>
			<div class="col-lg-6 col-md-6 col-xs-6">
				<video width='100%' height='370' loop autoplay muted>
					<source src='/video/profil_polres_pati.mp4' type='video/mp4'>
				</video> 				
				<div id="call_player"></div>
			</div>
		</div>
	</div>
	
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-2" align="left">
				<button id="" class="btn btn-lg btn-success" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;">PENDAFTARAN</div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_1" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;">LOKET 1</div>
				</button>
			</div>
			<div class="col-md-2" align="center">
				<button id="" class="btn btn-lg btn-primary" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;">DIFABEL</div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_2" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;">LOKET 2</div>
				</button>
			</div>
			<div class="col-md-2" align="center">
				<button id="" class="btn btn-lg btn-info" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;">ONLINE/VERIFIKASI</div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_3" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;">LOKET 3</div>
				</button>
			</div>
			<div class="col-md-2" align="center">
				<button id="" class="btn btn-lg btn-danger" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;">PENGAMBILAN</div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_4" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;">LOKET 4</div>
				</button>
			</div>
			<div class="col-md-2" align="right">
				<button id="" class="btn btn-lg btn-dark" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;">PENGADUAN</div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_5" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;">LOKET 5</div>
				</button>
			</div>
			<div class="col-md-2" align="right">
				<button id="" class="btn btn-lg btn-secondary" style="height: 160px; width:100%; margin-top: 20px; padding: 5px;">
					<div style="margin-bottom:5px;"></div>
				    <div style="border-bottom:1px solid #fff"></div>
					<span id="queue_number_6" style="font-size: 50px;">-</span>
				    <div style="border-bottom:1px solid #fff"></div>
					<div style="margin-top:5px;"></div>
				</button>
			</div>
		</div>
    </div>
	
	<div class="navbar navbar-expand-lg fixed-bottom navbar-dark bg-info text-white" id="info">
      <div class="container-fluid">
          <div class="col-lg-12">
            <marquee width="100%" direction="left">
				 &nbsp; ~ Selamat Datang di Pelayanan SKCK Poles Pati			</marquee>
          </div>
      </div>
    </div>
	
	
	{{-- <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script> --}}
	<script type="text/javascript" src="{{ URL::asset('js/jquery.gritter.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.print.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/prism.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			function call() {
				$.ajax({ 
					url   : "proses.php?com=last_call_queue",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						const str = msg.split("%kidgocms%");	
						$('#last_call_queue').html(str[0]);
						if (str[1] != 0) {
							//alert(str[1]);
							$('#call_player').html(str[1]);
						} else {
							
						}
					}
				}); 
			}
			setInterval( function () {
				$('#queue_number_1').load('prosesd095.html?com=last_call_queue_counter&amp;counter=1');
				$('#queue_number_2').load('prosesb94c.html?com=last_call_queue_counter&amp;counter=2');
				$('#queue_number_3').load('prosese996.html?com=last_call_queue_counter&amp;counter=3');
				$('#queue_number_4').load('proses1623.html?com=last_call_queue_counter&amp;counter=4');	
				$('#queue_number_5').load('proses1604.html?com=last_call_queue_counter&amp;counter=5');	
				//$('#queue_number_6').load('proses.php?com=last_call_queue_counter&counter=6');	
				call();
			}, 2000); // refresh setiap 2 detik
	
		});
	</script>
	
  </body>

</html>
