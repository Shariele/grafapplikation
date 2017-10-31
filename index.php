<!--Index/Home page. -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Graf</title>
		<?php
			 include "include/necessities.php";
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<form action="" class="form-group">
						<div class="row">
							<div class="col-md-6">
								Chart name:
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input class="form-control" type="text" placeholder="Name" name="chartName" autofocus>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								Value:
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input class="form-control" placeholder="value" type="text" name="value">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<center><button style="margin-top:10px" class="btn btn-md btn-primary" type="submit" name="button" value="createNew">Create Chart</button></center>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<!-- <html>
  <head>



  </head>

  <body>
    Div that will hold the pie chart
    <div id="chart_div"></div>
  </body>
</html> -->


    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // // Load the Visualization API and the corechart package.
      // google.charts.load('current', {'packages':['corechart']});

      // // Set a callback to run when the Google Visualization API is loaded.
      // google.charts.setOnLoadCallback(drawChart);

      // // Callback that creates and populates a data table,
      // // instantiates the pie chart, passes in the data and
      // // draws it.
      // function drawChart() {

      //   // Create the data table.
      //   var data = new google.visualization.DataTable();
      //   data.addColumn('string', 'Topping');
      //   data.addColumn('number', 'Slices');
      //   data.addRows([
      //     ['Mushrooms', 3],
      //     ['Onions', 1],
      //     ['Olives', 1],
      //     ['Zucchini', 1],
      //     ['Pepperoni', 2]
      //   ]);

      //   // Set chart options
      //   var options = {'title':'How Much Pizza I Ate Last Night',
      //                  'width':400,
      //                  'height':300};

      //   // Instantiate and draw our chart, passing in some options.
      //   var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      //   chart.draw(data, options);
      // }
    </script>