
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin : msAntrian v.1.0.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="img/polreslogo.png" />
	<link rel="stylesheet" type="text/css" href="../css/admin/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/select2.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/custom.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		th, td { white-space: nowrap; }
		tr {
			height: 20px; 
			margin: 0px;
			padding: 0px;
		}
		.select2-selection__rendered {
			line-height: 34px !important;
		}
		.select2-container .select2-selection--single {
			height: 38px !important;
		}
		.select2-selection__arrow {
			height: 37px !important;
		}
	</style>
</head>
  
<body style="background-color:#FFF;">

	<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
		<div class="container">
			<a href="./" class="navbar-brand" id="logo">
				<img src="/img/logo_light.png" height="35">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor03">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./"><i class="fas fa-home" aria-hidden="true"></i> Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href=""><i class="fa fa-edit" aria-hidden="true"></i> Data Pemohon</a>  
						{{-- index.php?com=pemohon_perhari --}}
					</li>
										<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profil"><i class="fa fa-list" aria-hidden="true"></i> Master <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="profil">
							<li><a href="/InfoAdmin" class="dropdown-item"><i class="fa fa-flag" aria-hidden="true"></i> Info</a></li>
							{{-- index.php?com=info --}}
							<li><a href="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> Video</a></li>
							{{-- index.php?com=video --}}
							<!--<li><a href="index.php?com=ip" class="dropdown-item"><i class="fa fa-flag" aria-hidden="true"></i> IP Address</a></li>-->
							<li><a href="" class="dropdown-item"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
							{{-- index.php?com=user --}}
						</ul>
					</li>
									</ul>
				<ul class="nav navbar-nav navbar-right">
										<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profil"><i class="fa fa-user" aria-hidden="true"></i> Administrator <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="profil">
							<li><a href="index.php?com=profil" class="dropdown-item"><i class="fa fa-key" aria-hidden="true"></i> Ubah Password</a></li>
							<li class="divider"></li>
							<li><a href="/logout" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul>
					</li>
									</ul>
			</div>
		</div>
	</div>
	
		<div class="container" style="margin-top: -50px;">
		<div class="alert alert-info">
			Hi <strong>Administrator (admin) </strong> Anda bertugas di <strong> ()</strong> <strong></strong>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card text-white border-info mb-6" style="min-height:200px;">
					<div class="card-body" align="center">
						<div class="row">
							<div class="col-md-4 col-sm-4" align="center">
								<button id="call" class="btn btn-lg btn-info" style="height: 150px; width:100%;">
									PANGGIL
								</button>
							</div>
							<div class="col-md-4 col-sm-4" align="center">
								<button id="recall" class="btn btn-lg btn-warning" style="height: 150px; width:100%;">
									PANGGIL ULANG
								</button>
							</div>
							<div class="col-md-4 col-sm-4" align="center">
								<button id="skip" class="btn btn-lg btn-danger" style="height: 150px; width:100%;">
									LEWATI
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card text-black border-primary mb-3" style="height:200px;">
					<div class="card-header" align="center"><strong>ANTRIAN SAAT INI</strong></div>
					<div class="card-body" align="center">
						<p class="card-text" style="font-size: 35pt;"><strong><span id="queue_number_status">-</span></strong></p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card text-white border-success mb-3" style="min-height:200px;">
					<div class="card-body" align="center" style="margin-left: 10px; margin-right: 10px;">
						<div class="row">
							<button id="start" class="btn btn-lg btn-dark" style="width:100%;">
								START
							</button>
						</div>
						<div class="row">
							<button id="finish" class="btn btn-lg btn-success" style="width:100%; margin-top: 5px;">
								FINISH
							</button>
						</div>
						<div class="row">
							<button id="reject" class="btn btn-lg btn-primary" style="width:100%; margin-top: 5px;">
								REJECT
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card text-black border-info mb-3" style="min-height:200px;">
					<div class="card-header bg-info text-white" align="center"><strong>10 ANTRIAN MENUNGGU</strong></div>
					<div class="card-body" align="center" id="queue_pending">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="card text-black border-success mb-3" style="min-height:200px;">
					<div class="card-header bg-success text-white" align="center"><strong>10 ANTRIAN SUDAH DIPANGGIL</strong></div>
					<div class="card-body" align="center" id="queue_dipanggil">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="call_status" id="call_status" value="0">
	<input type="hidden" name="recall_status" id="recall_status" value="0">
	<input type="hidden" name="skip_status" id="skip_status" value="0">
	<input type="hidden" name="start_status" id="start_status" value="0">
	<input type="hidden" name="finish_status" id="finish_status" value="0">
	<input type="hidden" name="reject_status" id="reject_status" value="0">
	
	<input type="hidden" name="queue_number" id="queue_number" value="0">	
	<input type="hidden" name="counter_id" id="counter_id" value="0">
	<input type="hidden" name="queue_id" id="queue_id" value="0">
	
	
    <script type="text/javascript" src="{{ URL::asset('js/admin/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/custom.js') }}"></script>
  
	<script type="text/javascript">
		$(document).ready(function() {
			$('.select2').select2();
			
			$('.dataListTable').DataTable();
			
			$('.dataTablee').DataTable({
				"responsive" : true,
				"bFilter" : false,
				"bInfo" : false,
				"bPaginate" : true,
				"bLengthChange" : false,
				"bAutoWidth" : true,
				"bSort" : true,
				"pageLength" : 5,
				"pagingType": "simple"
			});
			
			setInterval( function () { 
				//table_queue_all.ajax.reload( null, false );
				$("#queue_pending").load("proses.php?com=antrian_pending");
				$("#queue_dipanggil").load("proses.php?com=antrian_dipanggil");
			}, 1000);
		
			$("button:disabled").css("background-color", "black");
			
			// variabel
			var call_status 	= $("#call_status").val();
			var recall_status 	= $("#recall_status").val();
			var skip_status 	= $("#skip_status").val();
			var start_status	= $("#start_status").val();
			var finish_status 	= $("#finish_status").val();
			var reject_status 	= $("#reject_status").val();
			
			var queue_number 	= $("#queue_number").val();
			var counter_id 		= $("#counter_id").val();
			var queue_id 		= $("#queue_id").val();
			
			var queue_id 		= $("#queue_number_status").val();
			
			// set default to disable button
			$("#call").attr("disabled", true);
			$("#recall").attr("disabled", true);
			$("#skip").attr("disabled", true);
			$("#start").attr("disabled", true);
			$("#finish").attr("disabled", true);
			$("#reject").attr("disabled", true);
			
			if (queue_number == '0') {
				$("#call").attr("disabled", false);
			}
			
			//-- Actiaon CALL
			$("#call").on('click',function(){
				//alert('call');
				$("#call").attr("disabled", true);
				$("#recall").attr("disabled", false);
				$("#skip").attr("disabled", false);
				$("#start").attr("disabled", false);
				
				$.ajax({ 
					url   : "proses.php?com=call",
					type  : "POST",
					cache : false,
					success: function(msg){ 
						const str = msg.split("#");	
						$('#queue_id').html(str[0]);
						$('#queue_number').html(str[1]);
						$('#queue_number_status').html(str[1]);
					}
				}); 
			});
			
			//-- Action RECALL
			$("#recall").on('click',function(){	
				//alert('recall');
				$.ajax({ 
					url   : "proses.php?com=recall&queue_id="+ queue_id,
					type  : "POST",
					cache : false,
					success: function(msg){ 
						//alert(msg);
					}
				}); 
			});	
			
			//-- Action SKIP
			$("#skip").on('click',function(){
				//alert('skip');
				$.ajax({ 
					url   : "proses.php?com=skip&queue_id="+ queue_id,
					type  : "POST",
					cache : false,
					success: function(msg){ 
						//alert(msg);
					}
				});
				$("#call").attr("disabled", false);
				$("#recall").attr("disabled", true);
				$("#skip").attr("disabled", true);
				$("#start").attr("disabled", true);
				$('#queue_id').val(0);
				$('#queue_number').val(0);
				$('#queue_number_status').html('-');
			});	
			
			//-- Action START
			$("#start").on('click',function(){
				//alert('start');
				$.ajax({ 
					url   : "proses.php?com=start&queue_id="+ queue_id,
					type  : "POST",
					cache : false,
					success: function(msg){ 
						//alert(msg);
					}
				});
				$("#call").attr("disabled", true);
				$("#recall").attr("disabled", true);
				$("#skip").attr("disabled", true);
				
				$("#start").attr("disabled", true);
				$("#finish").attr("disabled", false);
				$("#reject").attr("disabled", false);
			});	
			
			//-- Action FINISH
			$("#finish").on('click',function(){
				//alert('finish');
				$.ajax({ 
					url   : "proses.php?com=finish&queue_id="+ queue_id,
					type  : "POST",
					cache : false,
					success: function(msg){ 
						//alert(msg);
					}
				});
				$("#call").attr("disabled", false);
				$("#recall").attr("disabled", true);
				$("#skip").attr("disabled", true);
				
				$("#start").attr("disabled", true);
				$("#finish").attr("disabled", true);
				$("#reject").attr("disabled", true);
				
				$('#queue_id').val(0);
				$('#queue_number').val(0);
				$('#queue_number_status').html('-');
			});	
			
			//-- Action REJECT
			$("#reject").on('click',function(){
				//alert('reject');
				let note = prompt("Masukkan Keterangan ditolak (Reject) :", "");
				if (note == null || note == "") {
					alert('Masukkan keterangan...!!!');
				} else {
					$.ajax({ 
						url   : "proses.php?com=reject&queue_id="+ queue_id +"&note="+note,
						type  : "POST",
						cache : false,
						success: function(msg){ 
							//alert(msg);
						}
					});
					$("#call").attr("disabled", false);
					$("#recall").attr("disabled", true);
					$("#skip").attr("disabled", true);
					
					$("#start").attr("disabled", true);
					$("#finish").attr("disabled", true);
					$("#reject").attr("disabled", true);
					
					$('#queue_id').val(0);
					$('#queue_number').val(0);
					$('#queue_number_status').html('-');
				}
			});			
			
		} );
	</script>
	
  </body>
</html>