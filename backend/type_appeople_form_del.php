<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$no_id = $_REQUEST["ID"];


$sql = "DELETE FROM tbl_appeople WHERE no_id='$no_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('ข้อมูลถูกลบเรียบร้อยแล้ว');";
	echo "window.location = 'type_appeople.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาดกลับไปลบข้อมูลอีกครั้ง');";
	echo "</script>";
}
?>