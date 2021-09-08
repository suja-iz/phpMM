<?php
	$employee_id =$_REQUEST['employee_id'];
	$employee_name = $_REQUEST['employee_name'];
	$ocupatoion = $_REQUEST['ocupation'];
	$phone = $_REQUEST['phone']
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Registered Employee</h1>
<p>Employee ID: <?php echo $employee_id ?></p>
<p>Name : <?php echo $employee_name ?></p>
<p>Occupation : <?php echo $ocupatoion ?></p>
<p>Phone: <?php echo $phone ?></p>
</body>
</html>