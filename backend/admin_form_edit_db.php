<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	 $admin_id = $_REQUEST["admin_id"];
	$admin_user = $_REQUEST["admin_user"];
	$admin_pass = base64_encode($_REQUEST["admin_pass"]);
	$admin_name = $_REQUEST["admin_name"];
	
 $sql_us="SELECT admin_id,admin_user FROM tbl_admin Where admin_user='".$admin_user."' ";
$result_us = mysqli_query($con,$sql_us);
$ck=0;
if(mysqli_num_rows($result_us)==1){//echo 2222;
	$row = mysqli_fetch_array($result_us);
	 echo $a_id = $row[admin_id]; 
	
	if($a_id!=$admin_id){//echo"xxxxx";die();
		echo "<script type='text/javascript'>";
		echo "alert('มีชื่อผู้ใช้งานอยู่ในระบบแล้ว');";
		echo "window.location = 'admin.php?act=edit&ID=$admin_id'; ";
		echo "</script>";
	}else{$ck=1;}

}else{
		$ck=1;
	}
	
	
	
if($ck==1){
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE tbl_admin SET  
			admin_user='$admin_user' , 
			admin_pass='$admin_pass' , 
			admin_name='$admin_name' 
			WHERE admin_id='$admin_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขเรียบร้อยแล้ว');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาดกลับไปหน้าแก้ไขอีกครั้ง');";
	echo "</script>";
}
}
?>