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
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<title>EmpInforDisplay</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
		  <span class="navbar-brand mb-0 h1">Employee.inc</span>
		</div>
	  </nav>
	  <div class="container">
	<h1>Registered Employee</h1>
<p>Employee ID: <?php echo $employee_id ?></p>
<p>Name : <?php echo $employee_name ?></p>
<p>Occupation : <?php echo $ocupatoion ?></p>
<p>Phone: <?php echo $phone ?></p>
<a href="../employee.html"  class="btn btn-primary">Register New Employee</a>
</div>

</body>
</html>