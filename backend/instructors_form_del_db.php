<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$instructor_id = $_REQUEST["ID"];
$name_i = $_REQUEST["name_i"];
$position = $_REQUEST["position"];
$qualification = $_REQUEST["qualification"];
if ($name_i!="" and $position!="" or $position!=""){
	unlink("instructors_img/".$name_i.$position.$qualification);
	
}
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM instructors WHERE instructor_id='$instructor_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('Delete Succesfuly');";
	echo "window.location = 'instructors.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>