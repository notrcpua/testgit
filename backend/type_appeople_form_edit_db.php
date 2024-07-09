<meta charset="UTF-8">
<?php
include('connections.php');
date_default_timezone_set('Asia/Bangkok');
$date1 = date("Ymd_His");
$numrand = (mt_rand());

    $no_id = $_POST["no_id"];
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
    $img = isset($_POST['img']) ? $_POST['img'] : '';
    $img2 = isset($_POST['img2']) ? $_POST['img2'] : '';
    
    $upload = isset($_FILES['img']['name']) ? $_FILES['img']['name'] : '';
    if($upload != '') {
        // โค้ดที่เกี่ยวกับการอัพโหลดไฟล์ภาพ
        $path = "img_alumni/";
        $type = strrchr($_FILES['img']['name'], ".");
        $newname = $numrand.$date1.$type;
        $path_copy = $path.$newname;
        $path_link = "img_alumni/".$newname;
        move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
    } else {
        // ใช้ชื่อไฟล์เดิม
        $newname = $img2;
    }
    
    $sql = "UPDATE tbl_appeople SET  
            img='$newname', 
            alumni_id='$alumni_id',
            alumni_gd='$alumni_gd',
            alumni_name='$alumni_name',
            alumni_surname='$alumni_surname',
            section='$section', 
            education_faculty='$education_faculty',
            education_branch='$education_branch',
            house_no='$house_no',
            village_no='$village_no',
            sub_district='$sub_district',
            district='$district',
            province='$province',
            postal_code='$postal_code',
            alumni_tel='$alumni_tel',
            alumni_mail='$alumni_mail',
            alumni_year='$alumni_year',
            alumni_no='$alumni_no',
            job='$job',
            work='$work',
            work_position='$work_position',
            work_workplace='$work_workplace',

            address_numbernw='$address_numbernw',
            moo='$moo',
            subdistrict='$subdistrict',
            district_w='$district_w',
            province_w='$province_w',
            postal_codew='$postal_codew',

            upskill='$upskill',
            reskill='$reskill',
            income='$income'
            WHERE no_id = '$no_id'";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
        // บันทึกสำเร็จ
    } else {
        // เกิดข้อผิดพลาดในการบันทึก
    }
     //ปิดการเชื่อมต่อ database 

    //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
        
        if($result){
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลเรียบร้อย');";
        echo "window.location = 'type_appeople.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Update again');";
        echo "</script>";
    }


    ?>


