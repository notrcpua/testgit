<?php
// connections.php

$servername = "localhost"; // ชื่อโฮสต์ของฐานข้อมูล MySQL
$username = "root"; // ชื่อผู้ใช้ MySQL
$password = "123456"; // รหัสผ่าน MySQL
$dbname = "projectend"; // ชื่อฐานข้อมูลที่ต้องการใช้

// ทำการเชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $dbname);

// เช็คการเชื่อมต่อ
if (!$conn) {
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
}

// ตั้งค่าการเข้ารหัสเป็น UTF-8
mysqli_set_charset($conn, "utf8");

// ตั้งค่าโซนเวลา
date_default_timezone_set('Asia/Bangkok');

// function.php

function dup_email($alumni_mail, $conn) {
    $sql = "SELECT COUNT(*) as count FROM tbl_appeople WHERE alumni_mail = '$alumni_mail'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row['count'];
}

?>
