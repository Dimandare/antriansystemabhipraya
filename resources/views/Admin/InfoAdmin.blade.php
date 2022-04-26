<html lang="en"><head>
    <meta charset="utf-8">
    <title>Admin : msAntrian v.1.0.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="img/polreslogo.png" />
    <link rel="stylesheet" type="text/css" href="../css/admin/info/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/admin/info/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin/info/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/info/select2.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/admin/info/custom.min.css"/>
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
						<a class="nav-link" href="Admin/Admin"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.php?com=pemohon_perhari"><i class="fa fa-edit" aria-hidden="true"></i> Data Pemohon</a>
					</li>
										<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profil"><i class="fa fa-list" aria-hidden="true"></i> Master <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="profil">
							<li><a href="" class="dropdown-item"><i class="fa fa-flag" aria-hidden="true"></i> Info</a></li>
							<li><a href="" class="dropdown-item"><i class="fa fa-eye" aria-hidden="true"></i> Video</a></li>
							<!--<li><a href="index.php?com=ip" class="dropdown-item"><i class="fa fa-flag" aria-hidden="true"></i> IP Address</a></li>-->
							<li><a href="" class="dropdown-item"><i class="fa fa-users" aria-hidden="true"></i> User</a></li>
						</ul>
					</li>
									</ul>
				<ul class="nav navbar-nav navbar-right">
										<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profil"><i class="fa fa-user" aria-hidden="true"></i> Administrator <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="profil">
							<li><a href="" class="dropdown-item"><i class="fa fa-key" aria-hidden="true"></i> Ubah Password</a></li>
							<li class="divider"></li>
							<li><a href="/logout" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						</ul>
					</li>
									</ul>
			</div>
		</div>
	</div>
	
		
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card text-black border-dark mb-2" style="min-height:200px;">
				<div class="card-header bg-dark text-white" align="left">
				<strong>Master Info</strong> 
				<a href="" class="btn btn-sm btn-success" title="Tambah"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
				</div>
				<div class="card-body">
															<div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length">
                                                                {{-- <label>Show  --}}
                                                                {{-- <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label> --}}
                                                                </div></div></div>
                                                                <div class="row"><div class="col-sm-12"><table id="datatable" class="table table-hover dataListTable dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
						<thead>
							<tr role="row">
                                <th width="20" class="sorting sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 22px;">No</th>
                                <th width="100" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Judul: activate to sort column ascending" style="width: 98px;">Judul</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Info : activate to sort column ascending" style="width: 309px;">Info </th>
                                <th width="50" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Aktif: activate to sort column ascending" style="width: 40px;">Aktif</th>
                                <th width="100" class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 95px;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
														
							 
						<tr class="odd">
								<td align="center" class="sorting_1">1</td>
								<td align="left">Selamat Datang</td>
								<td align="left">Selamat Datang di Pelayanan SKCK Poles Pati</td>
								<td align="center">Aktif</td>
								<td align="center">
									<a href="index.php?com=info_form&amp;mod=edit&amp;id=1" class="btn btn-sm btn-info" title="Ubah">Ubah</a>
									<a onclick="javascript: return confirm('Anda yakin menghapus data ini ?')" href="index.php?com=info&amp;mod=delete&amp;id=1" class="btn btn-sm btn-danger" data-id="1" title="Hapus">Hapus</a>
								</td>
							</tr></tbody>
					</table></div></div>
                    {{-- <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div> --}}
									</div> 
				</div>
			</div>
		</div>
	</div>

	
		
    <script type="text/javascript" src="{{ URL::asset('js/admin/info/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/info/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/info/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/info/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/admin/info/custom.js') }}"></script>
 
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
	
  

</body></html>