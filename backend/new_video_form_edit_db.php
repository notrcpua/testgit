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
	$video_id = $_POST["video_id"];
	$video_link = $_POST["video_link"];
	$video_name = (isset($_POST['video_name']) ? $_POST['video_name'] : '');
	$img2 = $_POST['video_name'];
	$upload=$_FILES['video_name']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="new_video/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['video_name']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="new_video/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['video_name']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}
    
   
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
$sql = "UPDATE `new_video_tbl` SET `video_name`='$newname',`video_link`='$path_link' WHERE video_id='$video_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

$video_id = $_REQUEST["video_id"];
$video_link = $_REQUEST["video_link"];
if ($video_link!=""){
	unlink("new_video/".$video_link);
	
}

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขเรียบร้อย');";
	echo "window.location = 'new_video.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>