<meta charset="UTF-8">
<?php
error_reporting( error_reporting() & ~E_NOTICE );
//body
?>
<?php
// print_r($_POST);
// exit();
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม
$photo =(isset($_POST['photo']) ? $_POST['photo'] :'');
$name_i = $_POST['name_i'];
$position = $_POST['position'];
$qualification = $_POST['qualification'];
$email = $_POST['email'];
//img
	$upload=$_FILES['photo'];
	//print_r($upload);
	if($upload <> '') {
	//โฟลเดอร์ที่เก็บไฟล์
	$path="instructors_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	 $type = strrchr($_FILES['photo']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='img'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="instructors_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['photo']['tmp_name'],$path_copy);
	} 
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		 $sql = "INSERT INTO instructors
		(
		
		photo,
		name_i,
		position,
		qualification,
		email
		)
		VALUES
		(
		'$newname',
		'$name_i',
		'$position',
		'$qualification',
		'$email')";

		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
echo "<script type='text/javascript'>";
echo "alert('เพิ่มข้อมูลบุคลากรเรียบร้อย');";
echo "window.location = 'instructors.php'; ";
echo "</script>";
}
else{
echo "<script type='text/javascript'>";
echo "alert('Error back to upload again');";
echo "window.location = 'instructors.php'; ";
echo "</script>";
}
?>