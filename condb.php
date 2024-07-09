<?php
// $user = "tc";
// $passwd = "l;olh,1!";
// $host = "203.158.173.27";
// $dbName = "tc";

$user = "root";
$passwd = "123456";
$host = "localhost";
$dbName = "projectend";

$conn = mysqli_connect($host, $user, $passwd, $dbName) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
error_reporting(error_reporting() & ~E_NOTICE);
date_default_timezone_set('Asia/Bangkok');
?>


<!-- // $conn= mysqli_connect("203.158.173.27","tc","l;olh,1!","tc") or die("Error: " . mysqli_error($conn));
// // $conn= mysqli_connect("localhost","root","","projectend") or die("Error: " . mysqli_error($conn));
// mysqli_query($conn, "SET NAMES 'utf8' ");
// error_reporting( error_reporting() & ~E_NOTICE );
// date_default_timezone_set('Asia/Bangkok'); -->
