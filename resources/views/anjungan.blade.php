<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title>Antrian | Polres Pati -</title>
	<link rel="shortcut icon" type="image/x-icon" href="/img/polreslogo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.gritter.css">
	<link rel="stylesheet" type="text/css" href="/css/prism-okaidia.css">
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
  
  <body style="background-color:#FFF; background-image:url('/img/background.png');">
  
    <div class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a href="index.html" class="navbar-brand" id="logo">
			<img src="/img/logo.png" height="50">
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item" style="font-weight: bold">Jl. A. Yani No.1, Ngarus, Kec. Pati, Kab. Pati<br>Jawa Tengah Kode Pos 59112</li>
          </ul>
          <ul class="navbar-nav ms-md-auto">
            <li class="nav-item">
              <div align="right" style="font-weight: bold">
				  <script language='JavaScript'>document.write(tanggallengkap);</script><br>
				  <span id="jam">00:00:00</span>
			  </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
		<div class="page-header" id="banner">
			<div class="row">
			  <div class="col-lg-12 col-md-12" align="center">
				<h2>Selamat Datang di Pelayanan SKCK Polres Pati</h2>
				<p class="lead">Silahkan ambil nomor antrian sesuai dengan keperluan anda, Terima kasih.</p>
			  </div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-2 offset-md-1" align="center">
					<button id="service_1"  onclick="increase_n(1);printDiv('print_area');"class="btn btn-lg btn-success" style="height: 150px; width:200px; margin-top: 20px;">
						PENDAFTARAN
						<hr>
						<small class="content"><span class="1">0</span> Antrian</small>
					</button>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<button id="service_2" onclick="increase_n2(1);printDiv('print_area');" class="btn btn-lg btn-secondary" style="height: 150px; width:200px; margin-top: 20px;">
						SKCK ONLINE
						<hr>
						<small class="content2"><span class="2">0</span> Antrian</small>
					</button>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<button id="service_4" onclick="increase_n3(1);printDiv('print_area');" class="btn btn-lg btn-info" style="height: 150px; width:200px; margin-top: 20px;">
						VERIFIKASI
						<hr>
						<small class="content3"><span class="3">0</span> Antrian</small>
					</button>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<button id="service_3"  onclick="increase_n4(1);printDiv('print_area');" class="btn btn-lg btn-primary" style="height: 150px; width:200px; margin-top: 20px;">
						DIFABEL
						<hr>
						<small class="content4"><span class="4">0</span> Antrian</small>
					</button>
				</div>
				<div class="col-lg-2 col-md-2" align="center">
					<button id="service_5"  onclick="increase_n5(1);printDiv('print_area');remove(5);"" class="btn btn-lg btn-dark" style="height: 150px; width:200px; margin-top: 20px;">
						PENGADUAN
						<hr>
						<small class="content5"> <span class="5">0</span> Antrian</small>
					</button>
				</div>
			</div>
		</div>
    </div>
	<script src="http://code.jquery.com/jquery-1.4.1.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        var size_ini = 1;
        function increase_n5(size) {
            var size_increase = size_ini++;
            $(".content5").html("<span>" + size_increase + ' ' + 'Antrian' + "</span>")
        }
    </script>
	 <script type="text/javascript">
        var size_ini2 = 1;
        function increase_n4(size) {
            var size_increase = size_ini2++;
            $(".content4").html("<span>" + size_increase + ' ' + 'Antrian' + "</span>")
        }
    </script>
	 <script type="text/javascript">
        var size_ini3 = 1;
        function increase_n3(size) {
            var size_increase = size_ini3++;
            $(".content3").html("<span>" + size_increase + ' ' + 'Antrian' + "</span>")
        }
    </script>
	 <script type="text/javascript">
        var size_ini4 = 1;
        function increase_n2(size) {
            var size_increase = size_ini4++;
            $(".content2").html("<span>" + size_increase + ' ' + 'Antrian' + "</span>")
        }
    </script>
	<script type="text/javascript">
        var size_ini5 = 1;
        function increase_n(size) {
            var size_increase = size_ini5++;
            $(".content").html("<span>" + size_increase + ' ' + 'Antrian' + "</span>")
        }
    </script>
	<div class="navbar navbar-expand-lg fixed-bottom" id="info">
      <div class="container-fluid">
          <div class="col-lg-12">
            <marquee width="100%" direction="left">
				 &nbsp; ~ Selamat Datang di Pelayanan SKCK Poles Pati ~			</marquee>
          </div>
      </div>
    </div>
  
	<div id="print_area" style="font-family: 'Arial'; padding-top: 0px; margin-top: 0px; color: #000; vertical-align:top;" class="section-to-print">
		<div align="center"><img src="/img/logo.png" height="50"></div>
		<!--<div align="center">Jl. A. Yani No.1, Ngarus, Kec. Pati, Kab. Pati</div>-->
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 5px; font-size:8pt;"><span id="cetak_waktu"> <script language='JavaScript'>document.write(tanggallengkap);</script></span></div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 12px;"><img src="/img/line.png" height="2" width="100%"></div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 10px; font-size:10pt;">Nomor Antrian Anda :</div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 55px; font-size:35pt;"><b><span id="cetak_number"></span></b></div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 20px;"><b><span id="cetak_service"></span></b></div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 10px; font-size:10pt;">Silahkan Menunggu <span id="cetak_pending"></span> Antrian</div>
		<div align="center" style="margin-top: 0; margin-bottom: 0; height: 12px;"><img src="/img/line.png" height="2" width="100%"></div>
		<div align="center" style="font-size:9pt;">Silahkan mengambil nomor antrian baru jika nomor antrian Anda terlewatkan. </div>
		<div align="center" style="font-size:9pt;"> ~ TERIMA KASIH ~ </div>
	</div>

	<script>
		function printDiv(print_area) {
     var printContents = document.getElementById(print_area).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

		</script>
	
	<script type="text/javascript" src="{{ URL::asset('js/anjungan/bootstrap.bundle.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{{-- <script type="text/javascript" src="{{ URL::asset('js/anjungan/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/anjungan/jquery.gritter.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/anjungan/prism.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/anjungan/custom.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/anjungan/jquery.print.js') }}"></script> --}}
<script>
var clicks = 0; $("#service_5").click(function(){ clicks++; $('.jml_antrian_5').html(clicks);});
	</script>


	{{-- <script>
		var i = 0;
		function buttonClick() {
			i++;
			document.getElementById('inc').value = i;
		}
		function buttonClick2() {
			i++;
			document.getElementById('inc2').value = i;
		}
		function buttonClick3() {
			i++;
			document.getElementById('inc3').value = i;
		}
		function buttonClick4() {
			i++;
			document.getElementById('inc4').value = i;
		}
		function buttonClick5() {
			i++;
			document.getElementById('inc5').value = i;
		}
	</script> --}}




	{{-- <script type="text/javascript">
		$(document).ready(function() {
			$('#jml_antrian_1').load('proses6ea3.html?com=get_antrian_pending&amp;service=1');
			$('#jml_antrian_2').load('prosesc98c.html?com=get_antrian_pending&amp;service=2');
			$('#jml_antrian_3').load('proses3654.html?com=get_antrian_pending&amp;service=3');
			$('#jml_antrian_4').load('proses6744.html?com=get_antrian_pending&amp;service=4');
			
			$("#service_1").on('click',function(){				
				$.ajax({ 
					url   : "proses.php?com=simpan_antrian&service=1",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						if(msg == "success"){ 
							$('#jml_antrian_1').load('proses6ea3.html?com=get_antrian_pending&amp;service=1').fadeIn("slow");
														
							$.gritter.add({
								title: 'Terima Kasih.',
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#service_1').get(0).checked ? ' gritter-light' : '')
							});							
							
							var cetak_waktu = '';
							var cetak_number = '';
							var cetak_service = '';
							var cetak_pending = '';
							
							$.ajax({
								url : "proses.php?com=get_antrian_terakhir&service=1",
								type: "POST",
								success: function(msg)
								{
									const str = msg.split("#");	
									$('#cetak_waktu').html(str[0]);
									$('#cetak_number').html(str[1]);
									$('#cetak_service').html(str[2]);
									$('#cetak_pending').html(str[3]);
									
									$('#print_area').print();
									//$('#print_area').print();
									
									return false;
								}
							});
						}
					}
				}); 
			});
			
			$("#service_2").on('click',function(){				
				$.ajax({ 
					url   : "proses.php?com=simpan_antrian&service=2",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						if(msg == "success"){ 
							$('#jml_antrian_2').load('prosesc98c.html?com=get_antrian_pending&amp;service=2').fadeIn("slow");
														
							$.gritter.add({
								title: 'Terima Kasih.',
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#service_2').get(0).checked ? ' gritter-light' : '')
							});							
							
							var cetak_waktu = '';
							var cetak_number = '';
							var cetak_service = '';
							var cetak_pending = '';
							
							$.ajax({
								url : "proses.php?com=get_antrian_terakhir&service=2",
								type: "POST",
								success: function(msg)
								{
									const str = msg.split("#");	
									$('#cetak_waktu').html(str[0]);
									$('#cetak_number').html(str[1]);
									$('#cetak_service').html(str[2]);
									$('#cetak_pending').html(str[3]);
									
									$('#print_area').print();
									
									return false;
								}
							});
						}
					}
				}); 
			});
			
			$("#service_3").on('click',function(){				
				$.ajax({ 
					url   : "proses.php?com=simpan_antrian&service=3",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						if(msg == "success"){ 
							$('#jml_antrian_3').load('proses3654.html?com=get_antrian_pending&amp;service=3').fadeIn("slow");
														
							$.gritter.add({
								title: 'Terima Kasih.',
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#service_3').get(0).checked ? ' gritter-light' : '')
							});							
							
							var cetak_waktu = '';
							var cetak_number = '';
							var cetak_service = '';
							var cetak_pending = '';
							
							$.ajax({
								url : "proses.php?com=get_antrian_terakhir&service=3",
								type: "POST",
								success: function(msg)
								{
									const str = msg.split("#");	
									$('#cetak_waktu').html(str[0]);
									$('#cetak_number').html(str[1]);
									$('#cetak_service').html(str[2]);
									$('#cetak_pending').html(str[3]);
									
									$('#print_area').print();
									
									return false;
								}
							});
						}
					}
				}); 
			});
			
			$("#service_4").on('click',function(){				
				$.ajax({ 
					url   : "proses.php?com=simpan_antrian&service=4",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						if(msg == "success"){ 
							$('#jml_antrian_4').load('proses6744.html?com=get_antrian_pending&amp;service=4').fadeIn("slow");
														
							$.gritter.add({
								title: 'Terima Kasih.',
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#service_4').get(0).checked ? ' gritter-light' : '')
							});							
							
							var cetak_waktu = '';
							var cetak_number = '';
							var cetak_service = '';
							var cetak_pending = '';
							
							$.ajax({
								url : "proses.php?com=get_antrian_terakhir&service=4",
								type: "POST",
								success: function(msg)
								{
									const str = msg.split("#");	
									$('#cetak_waktu').html(str[0]);
									$('#cetak_number').html(str[1]);
									$('#cetak_service').html(str[2]);
									$('#cetak_pending').html(str[3]);
									
									$('#print_area').print();
									
									return false;
								}
							});
						}
					}
				}); 
			});
			
			$("#service_5").on('click',function(){				
				$.ajax({ 
					url   : "proses.php?com=simpan_antrian&service=5",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						if(msg == "success"){ 
							$('#jml_antrian_4').load('prosesb7b5.html?com=get_antrian_pending&amp;service=5').fadeIn("slow");
														
							$.gritter.add({
								title: 'Terima Kasih.',
								text: 'Silahkan Ambil Nomor Antrian Anda.',
								class_name: 'gritter-success' + (!$('#service_4').get(0).checked ? ' gritter-light' : '')
							});							
							
							var cetak_waktu = '';
							var cetak_number = '';
							var cetak_service = '';
							var cetak_pending = '';
							
							$.ajax({
								url : "proses.php?com=get_antrian_terakhir&service=5",
								type: "POST",
								success: function(msg)
								{
									const str = msg.split("#");	
									$('#cetak_waktu').html(str[0]);
									$('#cetak_number').html(str[1]);
									$('#cetak_service').html(str[2]);
									$('#cetak_pending').html(str[3]);
									
									$('#print_area').print();
									
									return false;
								}
							});
						}
					}
				}); 
			});
			
			
			
		} );
	</script> --}}
	
  </body>

</html>
