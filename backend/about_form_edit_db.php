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
	$about_id = $_POST["about_id"];
	$about_topic = $_POST["about_topic"];
	$about_text = $_POST["about_text"];
	$about_fulltext = $_POST["about_fulltext"];
	$about_link = $_POST["about_link"];
	$about_pic = (isset($_POST['about_pic']) ? $_POST['about_pic'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['about_pic']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="about_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['about_pic']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="about_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['about_pic']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}
 
	

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE about_tbl SET 
	        about_id='$about_id',
			about_pic='$newname',
			about_topic='$about_topic',
			about_text='$about_text',
			about_fulltext='$about_fulltext',
			about_link='$about_link'
			WHERE about_id='$about_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	$about_id = $_REQUEST["ID"];
	$about_topic = $_REQUEST["about_topic"];
$about_text = $_REQUEST["about_text"];
$about_fulltext = $_REQUEST["about_fulltext"];
$about_link = $_REQUEST["about_link"];
if ($about_text!=""and $about_topic!=""){
	unlink("about_img/".$about_text.$about_topic);
	
}

 mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขเรียบร้อย');";
	echo "window.location = 'about.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>