<!DOCTYPE html>
<html>
<head>
<title>RADIO ONLINE</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
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
 case "london";
 include 'hlondon.php';
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
</body>
</html>
