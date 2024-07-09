<meta charset="utf-8">
<?php
include('condb.php');
	$no_id  = $_POST["no_id"];
	$a_pass1  = $_POST["a_pass1"];
	$a_pass2  = $_POST["a_pass2"];

	if($a_pass1 != $a_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'home.php'; ";
		echo "</script>";
	}else{
	$sql = "UPDATE tbl_appeople SET 
	alumni_pass ='$a_pass1'
	WHERE no_id=$no_id
	 ";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	}
	mysqli_close($conn);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'home.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'home.php'; ";
	echo "</script>";
}
?>