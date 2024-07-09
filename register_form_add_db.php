<?php

include('function.php');
date_default_timezone_set('Asia/Bangkok');
$date1 = date("Ymd_His");
$numrand = (mt_rand());

//print_r($_POST);

//exit;

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
$alumni_pass = $_POST["alumni_pass"];
$alumni_year = $_POST["alumni_year"];
$alumni_no = $_POST["alumni_no"];
$job = $_POST["job"];
$work = $_POST["work"];

$study_university = $_POST["study_university"];
$study_Gradelevel = $_POST["study_Gradelevel"];
$study_group = $_POST["study_group"];
$study_Fieldofstudy = $_POST["study_Fieldofstudy"];

$work_position = $_POST["work_position"];
$work_workplace = $_POST["work_workplace"];



$No_Businessowner = $_POST["No_Businessowner"];
$Village_Businessowner = $_POST["Village_Businessowner"];
$district1_Businessowner = $_POST["district1_Businessowner"];
$district2_Businessowner = $_POST["district2_Businessowner"];
$province_Businessowner = $_POST["province_Businessowner"];
$zipcode_Businessowner = $_POST["zipcode_Businessowner"];
$tel_Businessowner = $_POST["tel_Businessowner"];
$name_Businessowner = $_POST["name_Businessowner"];




$upskill = $_POST["upskill"];
$reskill = $_POST["reskill"];
$income = $_POST["income"];
$img = isset($_POST['img']) ? $_POST['img'] : '';
$img2 = isset($_POST['img2']) ? $_POST['img2'] : '';

$upload = isset($_FILES['img']['name']) ? $_FILES['img']['name'] : '';
if($upload != '') {
    $path = "./backend/img_alumni/"; 
    $type = strrchr($_FILES['img']['name'], ".");
    $newname = $numrand.$date1.$type;
    $path_copy = $path.$newname;
    $path_link = "./backend/img_alumni/".$newname;
    move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
} else {
    $newname = $img2;
}

$ck_mail = dup_email($alumni_mail, $conn);
if($ck_mail > 0){
    echo "<script>";
    echo "alert('คุณมีบัญชีผู้ใช้แล้ว');";
    echo "window.location = 'search.php'";
    echo "</script>";
    exit();
}
if(isset($_POST['job']) && $_POST['job'] == 'มีงานทำ'){
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
        alumni_pass='$alumni_pass',
        alumni_year='$alumni_year',
        alumni_no='$alumni_no',
        job='$job',

        -- study_university='$study_university',
        -- study_Gradelevel='$study_Gradelevel ',
        -- study_group='$study_group',
        -- study_Fieldofstudy='$study_Fieldofstudy ',


        -- No_Businessowner='$No_Businessowner ',
        -- Village_Businessowner='$Village_Businessowner ',
        -- district1_Businessowner='$district1_Businessowner ',
        -- district2_Businessowner	='$district2_Businessowner ',
        -- province_Businessowner='$province_Businessowner ',	
        -- zipcode_Businessowner='$zipcode_Businessowner ',	
        -- tel_Businessowner='$tel_Businessowner ',
        -- name_Businessowner='$name_Businessowner ',


        work='$work',
        work_position='$work_position',
        work_workplace='$work_workplace',
        upskill='$upskill',
        reskill='$reskill',
        income='$income'
        WHERE no_id = '$no_id'";

        $result = mysqli_query($conn, $sql);
}elseif(isset($_POST['job']) && $_POST['job'] == 'ศึกษาต่อ'){
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
    alumni_pass='$alumni_pass',
    alumni_year='$alumni_year',
    alumni_no='$alumni_no',
    job='$job',

    study_university='$study_university',
    study_Gradelevel='$study_Gradelevel ',
    study_group='$study_group',
    study_Fieldofstudy='$study_Fieldofstudy ',


    -- No_Businessowner='$No_Businessowner ',
    -- Village_Businessowner='$Village_Businessowner ',
    -- district1_Businessowner='$district1_Businessowner ',
    -- district2_Businessowner	='$district2_Businessowner ',
    -- province_Businessowner='$province_Businessowner ',	
    -- zipcode_Businessowner='$zipcode_Businessowner ',	
    -- tel_Businessowner='$tel_Businessowner ',
    -- name_Businessowner='$name_Businessowner ',


    -- work='$work',
    -- work_position='$work_position',
    -- work_workplace='$work_workplace',

    upskill='$upskill',
    reskill='$reskill',
    income='$income'
    WHERE no_id = '$no_id'";
    

    $result = mysqli_query($conn, $sql);
}elseif(isset($_POST['job']) && $_POST['job'] == 'มีงานทำและศึกษาต่อ'){
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
    alumni_pass='$alumni_pass',
    alumni_year='$alumni_year',
    alumni_no='$alumni_no',
    job='$job',

    study_university='$study_university',
    study_Gradelevel='$study_Gradelevel ',
    study_group='$study_group',
    study_Fieldofstudy='$study_Fieldofstudy ',


    -- No_Businessowner='$No_Businessowner ',
    -- Village_Businessowner='$Village_Businessowner ',
    -- district1_Businessowner='$district1_Businessowner ',
    -- district2_Businessowner	='$district2_Businessowner ',
    -- province_Businessowner='$province_Businessowner ',	
    -- zipcode_Businessowner='$zipcode_Businessowner ',	
    -- tel_Businessowner='$tel_Businessowner ',
    -- name_Businessowner='$name_Businessowner ',


    work='$work',
    work_position='$work_position',
    work_workplace='$work_workplace',

    upskill='$upskill',
    reskill='$reskill',
    income='$income'
    WHERE no_id = '$no_id'";
    

    $result = mysqli_query($conn, $sql);
}elseif(isset($_POST['job']) && $_POST['job'] == 'เจ้าของกิจการ'){
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
    alumni_pass='$alumni_pass',
    alumni_year='$alumni_year',
    alumni_no='$alumni_no',
    job='$job',

    -- study_university='$study_university',
    -- study_Gradelevel='$study_Gradelevel ',
    -- study_group='$study_group',
    -- study_Fieldofstudy='$study_Fieldofstudy ',


    No_Businessowner='$No_Businessowner ',
    Village_Businessowner='$Village_Businessowner ',
    district1_Businessowner='$district1_Businessowner ',
    district2_Businessowner	='$district2_Businessowner ',
    province_Businessowner='$province_Businessowner ',	
    zipcode_Businessowner='$zipcode_Businessowner ',	
    tel_Businessowner='$tel_Businessowner ',
    name_Businessowner='$name_Businessowner ',


    -- work='$work',
    -- work_position='$work_position',
    -- work_workplace='$work_workplace',

    upskill='$upskill',
    reskill='$reskill',
    income='$income'
    WHERE no_id = '$no_id'";
    

    $result = mysqli_query($conn, $sql);
}else{


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
        alumni_pass='$alumni_pass',
        alumni_year='$alumni_year',
        alumni_no='$alumni_no',
        job='$job',

        study_university='$study_university',
        study_Gradelevel='$study_Gradelevel ',
        study_group='$study_group',
        study_Fieldofstudy='$study_Fieldofstudy ',


        No_Businessowner='$No_Businessowner ',
        Village_Businessowner='$Village_Businessowner ',
        district1_Businessowner='$district1_Businessowner ',
        district2_Businessowner	='$district2_Businessowner ',
        province_Businessowner='$province_Businessowner ',	
        zipcode_Businessowner='$zipcode_Businessowner ',	
        tel_Businessowner='$tel_Businessowner ',
        name_Businessowner='$name_Businessowner ',


        -- work='$work',
        -- work_position='$work_position',
        -- work_workplace='$work_workplace',

        upskill='$upskill',
        reskill='$reskill',
        income='$income'
        WHERE no_id = '$no_id'";

$result = mysqli_query($conn, $sql);

}
// exit;

if($result){
    echo "<script>";
    echo "alert('ลงทะเบียนข้อมูลเรียบร้อย');";
    echo "window.location = 'login.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาดในการลงทะเบียน');";
    echo "window.location = 'search.php'";
    echo "</script>";
}

mysqli_close($conn);
?>