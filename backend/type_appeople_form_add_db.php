<meta charset="UTF-8" />
<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());

	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม

	$img = (isset($_FILES['img']['name']) ? $_FILES['img']['name'] :'');

	$alumni_id = $_POST["alumni_id"];
	$alumni_gd = $_POST["alumni_gd"];
	$alumni_name = $_POST["alumni_name"];
	$alumni_surname = $_POST["alumni_surname"];
	$section = $_POST["section"];
	$education_faculty = $_POST["education_faculty"];
	$education_branch = $_POST["education_branch"];
    $house_no = $_POST["house_no"];
    $village_no = $_POST["village_no"];
    $sub_district = $_POST["sub_district"];
    $district = $_POST["district"];
    $province = $_POST["province"];
    $postal_code = $_POST["postal_code"];
	$alumni_tel = $_POST["alumni_tel"];
	$alumni_mail = $_POST["alumni_mail"];
	$alumni_year = $_POST["alumni_year"];
	$alumni_no = $_POST["alumni_no"];
	$job = $_POST["job"];
	$work = $_POST["work"];
	$work_position = $_POST["work_position"];
	$work_workplace = $_POST["work_workplace"];

	$address_numbernw = $_POST["address_numbernw"];
	$moo = $_POST["moo"];
	$subdistrict = $_POST["subdistrict"];
	$district_w = $_POST["district_w"];
	$province_w = $_POST["province_w"];
	$postal_codew = $_POST["postal_codew"];
	
    $upskill  = $_POST["upskill"];
	$reskill = $_POST["reskill"];
	$income = $_POST["income"];

	if(isset($_FILES['img'])) {
		// ทำงานกับไฟล์ภาพที่อัพโหลด
	
		//img
		$upload=$_FILES['img'];
		//print_r($upload);
		if($upload <> '') {
			//โฟลเดอร์ที่เก็บไฟล์
			$path="img_alumni/";
			//ตัวขื่อกับนามสกุลภาพออกจากกัน
			$type = strrchr($_FILES['img']['name'],".");
			//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
			$newname ='img'.$numrand.$date1.$type;
			$path_copy=$path.$newname;
			$path_link="img_alumni/".$newname;
			//คัดลอกไฟล์ไปยังโฟลเดอร์
			move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);
	
			// เมื่อมีการอัพโหลดภาพ กำหนดค่า $img ให้เป็น $newname
			$img = $newname;
		} 
		
		// เพิ่มไฟล์เข้าไปในตาราง uploadfile
		$sql ="INSERT INTO tbl_appeople
				(img, alumni_id, alumni_gd, alumni_name, alumni_surname, section, education_faculty, education_branch, house_no, village_no, sub_district, district,province, postal_code, alumni_tel, alumni_mail, alumni_year, alumni_no, job, work, work_position, work_workplace, address_numbernw, moo,subdistrict,district_w,province_w,postal_codew,upskill, reskill, income)
				VALUES
				('$img', '$alumni_id', '$alumni_gd', '$alumni_name', '$alumni_surname', '$section', '$education_faculty', '$education_branch', '$house_no', '$village_no','$sub_district','$district','$province','$postal_code','$alumni_tel', '$alumni_mail', '$alumni_year', '$alumni_no', '$job','$work', '$work_position', '$work_workplace','$address_numbernw','$moo','$subdistrict','$district_w','$province_w','$postal_codew', '$upskill', '$reskill', '$income')";
	
		$result = mysqli_query($con, $sql);
	
		mysqli_close($con);
	} else {
		// ไม่มีการส่งข้อมูลภาพมา
		// ให้กำหนดค่าเริ่มต้นให้กับตัวแปร $img
		$img = ''; // หรือ null ตามความเหมาะสม
	}
	

if($result){
    echo "<script>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location ='type_appeople.php'; ";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูล โปรดลองอีกครั้ง');";
    echo "window.location ='type_appeople.php'; ";
    echo "</script>";
}
?>