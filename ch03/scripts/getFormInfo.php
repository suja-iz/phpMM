
<?php
$first_name = trim($_REQUEST['first_name']);
$last_name = trim( $_REQUEST ['last_name']);
$email = trim($_REQUEST['email']);
$facebook_url = str_replace("facebook.org","facebook.com",trim($_REQUEST['facebook_url']));
$position = strpos ($facebook_url,"facebook.com");
if($position===false){
	$facebook_url = "https://www.facebook.com/" . $facebook_url;
}
$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url ="http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false){
	$twitter_url = $twitter_url . $twitter_handle;
}else {
		$twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/phpMM.css">

</head>
<body>
	<div id="header"><h1>PHP & MySQL: The Missiang Manual</h1></div>
	<div id="example">Example</div>

	<div id="content">
		<p>Here's a  record of what information you submitted:</p>
		Name: <?php echo $first_name ." ". $last_name; ?><br>		
		E-Mail Address: <?php echo $email;  ?><br>
		Facebook URL: <a href="<?php echo $facebook_url; ?>">facebook link</a>  <br>
		Twitter Handle: <a href="<?php  echo $twitter_url ?>"> Check out your twitter </a> <br>
	</p>
	</div>
<div id="footer"></div>
</body>
</html>
