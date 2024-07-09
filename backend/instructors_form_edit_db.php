<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$instructor_id = $_POST["instructor_id"];
	$name_i = $_POST["name_i"];
	$position = $_POST["position"];
	$qualification = $_POST["qualification"];
	$email = $_POST["email"];
	$photo = (isset($_POST['photo']) ? $_POST['photo'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['photo']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="instructors_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['photo']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="instructors_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['photo']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}
 
	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE instructors SET 
	        instructor_id='$instructor_id',
			photo='$newname',
			name_i='$name_i',
			position='$position',
			qualification='$qualification',
			email='$email'
			WHERE instructor_id='$instructor_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	$instructor_id = $_REQUEST["ID"];
	$name_i = $_REQUEST["name_i"];
$position = $_REQUEST["position"];
$qualification = $_REQUEST["qualification"];
$email = $_REQUEST["email"];
if ($name_i!=""and $position!=""){
	unlink("instructors_img/".$name_i.$position);
	
}

 mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขเรียบร้อย');";
	echo "window.location = 'instructors.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>