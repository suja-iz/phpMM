
<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST ['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$twitter_handle = $_REQUEST['twitter_handle'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="phpMM.css">

</head>
<body>
	<div id="header"><h1>PHP & MySQL: The Missiang Manual</h1></div>
	<div id="example">Example</div>

	<div id="content">
		<p>Here's a  record of what information you submitted:</p>
		<p>
		Name: <?php echo $first_name ." ". $last_name; ?><br>
		
		E-Mail Address: <?php echo $email;  ?><br>
		Facebook URL: <a href=" <?php echo $facebook_url; ?> "></a> <br>
		Twitter Handle: <?php echo $twitter_handle; ?> <br>
	</p>
	</div>
<div id="footer"></div>
</body>
</html>