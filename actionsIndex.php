<?php
include "/include/functions.php";

$action = $_REQUEST['action'];

switch($action){
	case 'createChart':
		$name = $_POST['chartName'];
		// $value = $_POST['firstValue'];

		createChart($name);
		header("location: index.php");
	break;

	case 'addChartValue':
		$id = $_POST['chartId'];
		$date = $_POST['date'];
		$value = $_POST['value'];

		addChartValue($id, $value, $date);
		header("location: graph.php?id=$id");
	break;
}