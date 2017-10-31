<!--Index/Home page. -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Graf</title>
		<?php 
		include "include/necessities.php";
		include "include/dbConnect.php"; 

		$id = $_GET['id'];

		$sql = "SELECT * FROM chartValues WHERE chartId = $id";
		$sth = $pdo->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll();
		// var_dump($jsonObj);
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="index.php"><button style="margin-top: 100px;" class="btn btn-md btn-primary">Tillbaka</button></a>
				</div>
				<div style="margin-top: 100px;" class="col-md-4">
					<form action="actionsIndex.php?action=addChartValue" method="POST">
						<input type="text" id="value" class="form-control" placeholder="New value" name="value">
						<input type="text" id="date" class="form-control" placeholder="yyyymmdd" name="date">
						<?php echo "<input type=\"hidden\" name=\"chartId\" value=\"$id\">"; ?>
						<button style="margin-top:10px" class="btn btn-md btn-primary" type="submit" name="button" value="addChartValue">Register</button>
					</form>
				</div>
				<div class="col-md-6">
					<div id="curve_chart" style="width: 900px; height: 500px"></div>
				</div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  var values = JSON.parse('<?php echo json_encode($result); ?>');
  // console.log(values);
  // console.log(values[0].value)

  function drawChart() {
    var combined = new Array();
	combined[0] = ['Date', 'Height'];
	for (var i = 0; i < values.length; i++){
	  combined[i + 1] = [values[i].date, values[i].value];
	}

    var data = google.visualization.arrayToDataTable(combined, false);
    var options = {
      title: 'Plantor',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  }
</script>