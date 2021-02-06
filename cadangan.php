
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>RSDH Cianjur</title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets1/css/ilmudetil.css">

	<script src="assets1/js/jquery-1.10.1.min.js"></script>

	<script type="text/javascript">
		$(function () {
			var chart;
			$(document).ready(function() {
				$.getJSON("kamarcadangan.php", function(json) {
				
					chart = new Highcharts.Chart({
						chart: {
							renderTo: 'mygraph',
							type: 'line'
							
						},
						title: {
							text: 'Grafik Data Pasien Rawat Inap'
							
						},
						subtitle: {
							text: '(Jumlah Pasien Per Ruangan)'
						
						},
						xAxis: {
							categories: ['Tgl 1', 'Tgl 2', 'Tgl 3', 'Tgl 4', 'Tgl 5', 'Tgl 6', 'Tgl 7', 'Tgl 8', 'Tgl 9', 'Tgl 10', 'Tgl 11', 'Tgl 12', 'Tgl 13', 'Tgl 14', 'Tgl 15','Tgl 16', 'Tgl 17', 'Tgl 18', 'Tgl 19', 'Tgl 20', 'Tgl 21', 'Tgl 22', 'Tgl 23', 'Tgl 24', 'Tgl 25', 'Tgl 26', 'Tgl 27', 'Tgl 28', 'Tgl 29', 'Tgl 30', 'Tgl 31'  ]
						},
						yAxis: {
							title: {
								text: 'Jumlah Pasien'
							},
							plotLines: [{
								value: 0,
								width: 0,
								color: '#808080'
							}]
						},
						tooltip: {
							formatter: function() {
									return '<b>'+ this.series.name +'</b><br/>'+
									this.x +': '+ this.y;
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: 0,
							y: 120,
							borderWidth: 0
						},
						series: json
					});
				});
			
			});
			
		});
		</script>
		
	<script src="assets1/js/highcharts.js"></script>
	<script src="assets1/js/exporting.js"></script>
        
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
			RSDH Cianjur</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>

<div class="container" >
<ul class="nav nav-tabs">
  <li role="presentation" ><a href="linechart.php">Data Kamar Utama</a></li>
  <li role="presentation" class="active"><a href="cadangan.php">Data Kamar Cadangan</a></li>
</ul>
</div>

<!--- Bagian Judul-->	

<div class="container" style="margin-top:20px">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Laporan Ranap</div>
				<div class="panel-body">
					<div id ="mygraph"></div>
				</div>
		</div>
	</div>
</div>

<script src="assets1/js/highcharts.js"></script>
<script src="assets1/js/jquery-1.10.1.min.js"></script>

<div class="navbar navbar-default navbar-fixed-bottom footer-bottom">
   <div class="container text-center">
      <p class="text-center">Copyright &copy; 2021,  IT RSDH Cianjur</a></p>
   </div>
</div>
</body>
</html>
