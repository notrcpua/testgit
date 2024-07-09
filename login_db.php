<?php
session_start();
include("condb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input fields
	$alumni_mail = mysqli_real_escape_string($conn, $_POST['alumni_mail']);
	$alumni_pass = mysqli_real_escape_string($conn, $_POST['alumni_pass']);

	if (empty($alumni_mail) || empty($alumni_pass)) {
		echo "<script>";
		echo "alert('กรุณากรอกข้อมูลให้ครบ');";
		echo "window.location = 'login.php';";
		echo "</script>";
	} else {
		$sql = "SELECT * FROM tbl_appeople WHERE alumni_mail = ? AND alumni_pass = ?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $alumni_mail, $alumni_pass);
		mysqli_stmt_execute($stmt);
		$query = mysqli_stmt_get_result($stmt);
		$row = mysqli_num_rows($query);

		if ($row == 1) {
			$result = mysqli_fetch_array($query);
			$_SESSION['no_id'] = $result['no_id'];
			$_SESSION['alumni_name'] = $result['alumni_name'];

			echo "<script>";
			echo "window.location = 'home.php';";
			echo "</script>";
		} else {
			echo "<script>";
			echo "alert('อีเมล/รหัสผ่าน ไม่ถูกต้อง');";
			echo "window.location = 'login.php';";
			echo "</script>";
		}

		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
} else {
	echo "<script>";
	echo "alert('Method not allowed!');";
	echo "window.location = 'login.php';";
	echo "</script>";
}
?>
