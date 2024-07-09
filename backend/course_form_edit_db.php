<?php
// เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านี้

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_REQUEST["id"];
    $objective = $_REQUEST["objective"];
    $qualification = $_REQUEST["qualification"];
    $job = $_REQUEST["job"];
    $time_cs = $_REQUEST["time_cs"];
    $pay = $_REQUEST["pay"];
    $area = $_REQUEST["area"];

    // ตรวจสอบว่ามีไฟล์ใหม่ถูกอัปโหลดหรือไม่
    if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] == UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES['file_upload']['tmp_name'];
        $file_name = $_FILES['file_upload']['name'];
        $destination = 'uploads/' . $file_name;

        // ย้ายไฟล์ไปยังโฟลเดอร์ 'uploads'
        move_uploaded_file($file_tmp_path, $destination);
        $file_upload = $file_name;
    } else {
        // ถ้าไม่มีไฟล์ใหม่ถูกอัปโหลด ให้ใช้ไฟล์ที่มีอยู่แล้ว
        $file_upload = $_REQUEST["existing_file"];
    }

    $sql = "UPDATE course SET  
            objective='$objective', 
            qualification='$qualification',
            job='$job',
            time_cs='$time_cs', 
            pay='$pay',
            area='$area',
            file_upload='$file_upload'
            WHERE id = '$id'";

    $result = mysqli_query($con, $sql) or die("Error in query: $sql");

    // ปิดการเชื่อมต่อกับฐานข้อมูล
    mysqli_close($con);

    // จาวาสคริปต์แสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขเรียบร้อย');";
        echo "window.location = 'course.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Update again');";
        echo "</script>";
    }
} else {
    echo "Error !!";
}
?>
