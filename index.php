<!DOCTYPE html>
<html>
<head>
<title>PATRICK GOES ONLINE</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body background="images/bg.jpg">
<div class="container">
<div class="gallery"><?php include 'header.php';?></div>
<?php include 'sidebar.php';?>
<?php
if (! isset($_GET['page']))
    {
        include('ket.php');

    } else {  
switch($_GET['page'])
{
 case "login";
 include 'hlogin.php';
 break;

 case "radio";
include 'hradio.php';
 break;
  case "ket";
include 'ket.php';
 break;
} 
	}
?>
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>
