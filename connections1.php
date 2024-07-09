<?php
$con= mysqli_connect("localhost","root","123456","projectend") or die("Error: " . mysqli_error($con));
// $con= mysqli_connect("localhost","tc","l;olh,1!","tc") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
 
?>
