<?php
$student_index = $_REQUEST['student_index'];
$first_name =$_REQUEST['first_name'];
$second_name = $_REQUEST['second_name'];
$course = $_REQUEST['course'];
$contact =$_REQUEST['contact'];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="contant">
    <h1>student information</h1>
    <p>STUDENT INDEX : <?php echo $student_index ?> </p>
    <p> FIRST NAME : <?php echo $first_name ?> </p>
    <p>LAST NAME : <?php echo $second_name ?></p>
    <p>COURSE : <?php echo $course ?></p>
    <p>CONTACT : <?php echo $contact ?></p>

</div>    
</body>
</html>