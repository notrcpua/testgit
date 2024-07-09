<meta charset="UTF-8">
<?php
error_reporting(error_reporting() & ~E_NOTICE);
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

$video_name = $_POST['video_name'];
$video_link = (isset($_POST['video_link']) ? $_POST['video_link'] : '');


//img
$upload = $_FILES['video_link'];
if ($upload <> '') {
	//โฟลเดอร์ที่เก็บไฟล์
	$path = "new_video/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['video_link']['name'], ".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname = 'video' . $numrand . $date1 . $type;
	$path_copy = $path . $newname;
	$path_link = "new_video/" . $newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['video_link']['tmp_name'], $path_copy);
}
// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$sql = "INSERT INTO new_video_tbl
		(
        video_name,
		video_link
		)
		VALUES
		(
		'$video_name',
		'$newname')";

$result = mysqli_query($con, $sql) or die("Error in query: $sql ");

// javascript แสดงการ upload file
echo $result;

if ($result) {
	echo "success";
}{
	echo "internal error";
}

mysqli_close($con);
// if ($result) {
// 	echo "<script type='text/javascript'>";
// 	echo "alert('เพิ่มวิดีโอเรียบร้อย');";
// 	echo "window.location = 'new_video.php'; ";
// 	echo "</script>";
// } else {
// 	echo "<script type='text/javascript'>";
// 	echo "alert('Error back to upload again');";
// 	echo "window.location = 'new_video.php'; ";
// 	echo "</script>";
// }
?>