<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$about_id = $_REQUEST["ID"];
$about_topic = $_REQUEST["about_topic"];
$about_text = $_REQUEST["about_text"];
$about_fulltext = $_REQUEST["about_fulltext"];
if ($about_text!="" and $about_topic!="" or $about_topic!=""){
	unlink("about_img/".$about_text.$about_topic.$about_fulltext);
	
}
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM about_tbl WHERE about_id='$about_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('Delete Succesfuly');";
	echo "window.location = 'about.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>