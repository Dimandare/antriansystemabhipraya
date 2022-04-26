<html lang="en"><head>
    <meta charset="utf-8">
    <title>Antrian | Polres Pati -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="/img/polreslogo.png" />
	<link rel="stylesheet" type="text/css" href="../css/Atasan/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/Atasan/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Atasan/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Atasan/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Atasan/custom.min.css">
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
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
  
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
						<a class="nav-link" href="./"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.php?com=pemohon"><i class="fa fa-edit" aria-hidden="true"></i> Data Pemohon</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
										<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profil"><i class="fa fa-user" aria-hidden="true"></i> Kepala Satuan <span class="caret"></span></a>
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
	
			
	<!-- Chart.js -->
	<script type="text/javascript" src="{{ URL::asset('js/atasan/Chart.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/atasan/utils.js') }}"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>

	<div class="container" style="margin-top: -50px;">
		<div class="alert alert-info">
			Hi <strong>Kepala Satuan (kasat) </strong>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
						<div class="col-md-6 col-sm-12">
				<div class="card text-black border-info mb-3" style="min-height:200px;">
					<div class="card-header bg-info text-white" align="left"><strong>GRAFIK LAYANAN  : 20 APR 2022</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="hari_grafik" style="height: 294px; width: 468px; display: block;" width="585" height="367" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var color = Chart.helpers.color;
			var barChartDataShipping = {
				labels: [' '],
				datasets: [{
					label: 'Dilayani',
					backgroundColor: color(window.chartColors.purple).alpha(0.75).rgbString(),
					borderColor: window.chartColors.purple,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [  ]
				}, {
					label: 'Dilewati',
					backgroundColor: color(window.chartColors.grey).alpha(0.75).rgbString(),
					borderColor: window.chartColors.grey,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [  ]
				}, {
					label: 'Tidak Terlayani',
					backgroundColor: color(window.chartColors.orange).alpha(0.75).rgbString(),
					borderColor: window.chartColors.orange,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [  ]
				}, {
					label: 'Selesai',
					backgroundColor: color(window.chartColors.green).alpha(0.75).rgbString(),
					borderColor: window.chartColors.green,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [  ]
				}, {
					label: 'Ditolak',
					backgroundColor: color(window.chartColors.red).alpha(0.75).rgbString(),
					borderColor: window.chartColors.red,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [  ]
				}]
			};
			
			var ctx = document.getElementById('hari_grafik').getContext('2d');
			new Chart(ctx, {
				type: 'bar',
				data: barChartDataShipping,
				options: {
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 15,
							bottom: 0
						}
					},
					events: [],
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: true,
						position: 'bottom',
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								display: true
							}
						}]
					},
					animation: {
						duration: 1,
							onComplete: function() {
								var chartInstance = this.chart,
								ctx = chartInstance.ctx;
			
								ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
								ctx.textAlign = 'center';
								ctx.textBaseline = 'bottom';
			
								this.data.datasets.forEach(function(dataset, i) {
									var meta = chartInstance.controller.getDatasetMeta(i);
									meta.data.forEach(function(bar, index) {
									if (dataset.data[index] > 0) {
										var data = dataset.data[index];
										ctx.fillText(data, bar._model.x, bar._model.y);
									}
								});
							});
						}
					}
				}
			});
			</script>
						<div class="col-md-6 col-sm-12">
				<div class="card text-black border-info mb-3" style="min-height:200px;">
					<div class="card-header bg-info text-white" align="left"><strong>GRAFIK LAYANAN  : 20 APR 2022</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="hari_grafik_layanan" style="height: 281px; width: 468px; display: block;" width="585" height="351" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var ctx_2 = document.getElementById('hari_grafik_layanan').getContext('2d');
			var myChart_2 = new Chart(ctx_2, {
				type: 'pie',
				data: {
					datasets: [{
						data: [0, 1, 1, 1, 0],
						backgroundColor: [window.chartColors.grey, window.chartColors.red, window.chartColors.orange, window.chartColors.yellow, window.chartColors.green],
						label: ''
					}],
					labels: [ 'Pendaftaran', 'SKCK Online', 'Difabel', 'Verifikasi', 'Pengaduan' ]
				},
				options: {
					responsive: true,
					legend: {
						display: true,
						position: 'left'
					}
				}
			});	
			</script>
		</div>		
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card text-black border-primary mb-3" style="min-height:200px;">
					<div class="card-header bg-primary text-white" align="left"><strong>GRAFIK LAYANAN  : APR 2022</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="grafik" style="height: 294px; width: 468px; display: block;" width="585" height="367" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var color = Chart.helpers.color;
			var barChartDataShipping = {
				labels: [' '],
				datasets: [{
					label: 'Dilayani',
					backgroundColor: color(window.chartColors.purple).alpha(0.75).rgbString(),
					borderColor: window.chartColors.purple,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [ 4 ]
				}, {
					label: 'Dilewati',
					backgroundColor: color(window.chartColors.grey).alpha(0.75).rgbString(),
					borderColor: window.chartColors.grey,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [ 3 ]
				}, {
					label: 'Tidak Terlayani',
					backgroundColor: color(window.chartColors.orange).alpha(0.75).rgbString(),
					borderColor: window.chartColors.orange,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [ 46 ]
				}, {
					label: 'Selesai',
					backgroundColor: color(window.chartColors.green).alpha(0.75).rgbString(),
					borderColor: window.chartColors.green,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [ 4 ]
				}, {
					label: 'Ditolak',
					backgroundColor: color(window.chartColors.red).alpha(0.75).rgbString(),
					borderColor: window.chartColors.red,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					data: [ 0 ]
				}]
			};
			
			var ctx = document.getElementById('grafik').getContext('2d');
			new Chart(ctx, {
				type: 'bar',
				data: barChartDataShipping,
				options: {
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 15,
							bottom: 0
						}
					},
					events: [],
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: true,
						position: 'bottom',
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								display: true
							}
						}]
					},
					animation: {
						duration: 1,
							onComplete: function() {
								var chartInstance = this.chart,
								ctx = chartInstance.ctx;
			
								ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
								ctx.textAlign = 'center';
								ctx.textBaseline = 'bottom';
			
								this.data.datasets.forEach(function(dataset, i) {
									var meta = chartInstance.controller.getDatasetMeta(i);
									meta.data.forEach(function(bar, index) {
									if (dataset.data[index] > 0) {
										var data = dataset.data[index];
										ctx.fillText(data, bar._model.x, bar._model.y);
									}
								});
							});
						}
					}
				}
			});
			</script>
						<div class="col-md-6 col-sm-12">
				<div class="card text-black border-primary mb-3" style="min-height:200px;">
					<div class="card-header bg-primary text-white" align="left"><strong>GRAFIK LAYANAN  : 20 APR 2022</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="bulan_grafik_layanan" style="height: 281px; width: 468px; display: block;" width="585" height="351" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var ctx_2 = document.getElementById('bulan_grafik_layanan').getContext('2d');
			var myChart_2 = new Chart(ctx_2, {
				type: 'pie',
				data: {
					datasets: [{
						data: [14, 8, 12, 7, 7],
						backgroundColor: [window.chartColors.grey, window.chartColors.red, window.chartColors.orange, window.chartColors.yellow, window.chartColors.green],
						label: ''
					}],
					labels: [ 'Pendaftaran', 'SKCK Online', 'Difabel', 'Verifikasi', 'Pengaduan' ]
				},
				options: {
					responsive: true,
					legend: {
						display: true,
						position: 'left'
					}
				}
			});	
			</script>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card text-black border-success mb-3" style="min-height:200px;">
					<div class="card-header bg-success text-white" align="left"><strong>GRAFIK LAYANAN 6 BULAN TERAKHIR</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="grafik_trend" style="height: 294px; width: 468px; display: block;" width="585" height="367" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var color = Chart.helpers.color;
			var barChartDataShippingTrend = {
				labels: ['Nov-21', 
						'Dec-21',
						'Jan-22', 
						'Feb-22',
						'Mar-22', 
						'Apr-22'],
				datasets: [{
					label: 'Total Antrian',
					backgroundColor: color(window.chartColors.black).alpha(0.75).rgbString(),
					borderColor: window.chartColors.black,
					borderWidth: 2,
					type: 'line',
					fill: false,
					fontColor: "black",
					fontSize: 12,
					data: [ , 
							,
							, 
							,
							12, 
							53]
				}, {
					label: 'Dilayani',
					backgroundColor: color(window.chartColors.purple).alpha(0.75).rgbString(),
					borderColor: window.chartColors.purple,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					stack: 'Stack 0',
					data: [ , 
							,
							, 
							,
							0, 
							4]
				}, {
					label: 'Dilewati',
					backgroundColor: color(window.chartColors.grey).alpha(0.75).rgbString(),
					borderColor: window.chartColors.grey,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					stack: 'Stack 0',
					data: [ , 
							,
							, 
							,
							0, 
							3]
				}, {
					label: 'Tidak Terlayani',
					backgroundColor: color(window.chartColors.orange).alpha(0.75).rgbString(),
					borderColor: window.chartColors.orange,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					stack: 'Stack 0',
					data: [ , 
							,
							, 
							,
							12, 
							46]
				}, {
					label: 'Selesai',
					backgroundColor: color(window.chartColors.green).alpha(0.75).rgbString(),
					borderColor: window.chartColors.green,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					stack: 'Stack 1',
					data: [ , 
							,
							, 
							,
							0, 
							4]
				}, {
					label: 'Ditolak',
					backgroundColor: color(window.chartColors.red).alpha(0.75).rgbString(),
					borderColor: window.chartColors.red,
					borderWidth: 1,
					fontColor: "black",
					fontSize: 12,
					stack: 'Stack 1',
					data: [ , 
							,
							, 
							,
							0, 
							0]
				}]
			};
			
			var ctx = document.getElementById('grafik_trend').getContext('2d');
			new Chart(ctx, {
				type: 'bar',
				data: barChartDataShippingTrend,
				options: {
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 15,
							bottom: 0
						}
					},
					events: [],
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: true,
						position: 'bottom',
						labels: {
						}
					},
					scales: {
						xAxes: [{
							stacked: true
						}],
						yAxes: [{
							stacked: true,
							ticks: {
								beginAtZero: true,
								display: true
							}
						}]
					},
					animation: {
						duration: 1,
							onComplete: function() {
								var chartInstance = this.chart,
								ctx = chartInstance.ctx;
			
								ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
								ctx.textAlign = 'center';
								ctx.textBaseline = 'bottom';
			
								this.data.datasets.forEach(function(dataset, i) {
									var meta = chartInstance.controller.getDatasetMeta(i);
									meta.data.forEach(function(bar, index) {
									if (dataset.data[index] > 0) {
										var data = dataset.data[index];
										ctx.fillText(data, bar._model.x, bar._model.y + 17);
									}
								});
							});
						}
					}
				}
			});

			</script> 
			<div class="col-md-6 col-sm-12">
				<div class="card text-black border-success mb-3" style="min-height:200px;">
					<div class="card-header bg-success text-white" align="left"><strong>DATA LAYANAN 6 BULAN TERAKHIR</strong></div>
					<div class="card-body" style="height: 335px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
						<canvas id="tahun_grafik_layanan" style="height: 281px; width: 468px; display: block;" width="585" height="351" class="chartjs-render-monitor"></canvas>
					</div>
				</div>
			</div>
						<script>
			var ctx_2 = document.getElementById('tahun_grafik_layanan').getContext('2d');
			var myChart_2 = new Chart(ctx_2, {
				type: 'pie',
				data: {
					datasets: [{
						data: [17, 12, 14, 9, 8],
						backgroundColor: [window.chartColors.grey, window.chartColors.red, window.chartColors.orange, window.chartColors.yellow, window.chartColors.green],
						label: ''
					}],
					labels: [ 'Pendaftaran', 'SKCK Online', 'Difabel', 'Verifikasi', 'Pengaduan' ]
				},
				options: {
					responsive: true,
					legend: {
						display: true,
						position: 'left'
					}
				}
			});	
			</script>
		</div>
	</div>
	
	<script type="text/javascript" src="{{ URL::asset('js/atasan/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/atasan/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/atasan/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/atasan/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/atasan/custom.js') }}"></script>

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
		} );
	</script>
	
  

</body></html>