<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="../../css/phpMM.css" rel="stylsheet" type="text\css"/>

    <title>Document</title>
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
 <div id="example">Example 3-2</div>

 <div id="contant">
     <p>Here's a record of everything in the $_REQUEST array:</p>
     <?php
     foreach($_REQUEST as $key => $value){
         echo "<p> for" . $key ." , the Value is '" . $value . "'</p>";
     
     }
     ?>
     </div>
    
</body>
</html>