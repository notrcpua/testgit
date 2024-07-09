<meta charset="UTF-8" />
<?php
include('connections.php');

$admin_user = $_POST['admin_user'];
$admin_pass = base64_encode($_POST['admin_pass']);
$admin_name = $_POST['admin_name'];

$sql_us="SELECT admin_user FROM tbl_admin Where admin_user='".$admin_user."' ";
$result_us = mysqli_query($con,$sql_us);
if(mysqli_num_rows($result_us)==1){
			echo "<script>";
			echo "alert('มีชื่อผู้ใช้งานนี้ในระบบแล้ว');";
			echo "window.location ='admin.php?act=add'; ";
			echo "</script>";
}else{



$sql ="INSERT INTO tbl_admin
		
		(admin_user,  admin_pass, admin_name)
		
		VALUES
		
		('$admin_user', '$admin_pass', '$admin_name')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());



		mysqli_close($con);
		//exit();
		
		if($result){
			echo "<script>";
			echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='admin.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('เกิดข้อผิดพลาดกลับไปเพิ่มข้อมูลใหม่อีกครั้ง');";
			echo "window.location ='admin'; ";
			echo "</script>";
		}
		
}

?>