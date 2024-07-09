<?php

session_start();
error_reporting(error_reporting() & ~E_NOTICE);

// Include database connection
include('connections1.php');

// if(isset($_REQUEST['alumni_mail'])==1){
//   echo "xxxxxxxxxxx".$alumni_mail=1;
//   }
// if(isset($_GET["ID"])){
//   $no_id = $_GET["ID"];
// }else{
//   $no_id = "";
// }


$no_id = $_GET["ID"];

//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_appeople WHERE no_id='$no_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
$row = mysqli_fetch_array($result);
extract($row);

$query = "SELECT * FROM tbl_appeople ORDER BY no_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
        /* Add your custom CSS styles here */
        body {
            background-color: #f4f4f4;
            padding-top: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-heading {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-edit {
            background-color: #f0ad4e;
            border-color: #eea236;
            color: #fff;
        }
        .btn-edit:hover {
            background-color: #ec971f;
            border-color: #d58512;
        }
    </style>
</head>     
<body>


<form action="register_form_add_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-4 control-label">  </div>
    <div class="col-8" align="center">
      <br>
      <h4>ลงทะเบียนศิษย์เก่า</h4>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-4 control-label" align="right">
      <label for="no_id">
        ID จัดการข้อมูล :
      </label>

    </div>
    <div class="col-2 col-sm-4 col-md-1" align="left">
      <input  name="no_id" type="number" readonly value="<?php echo $no_id;?>" class="form-control" id="no_id" />
    </div>
    </div>
   
  <div class="form-group">
    <label class="col-sm-4 control-label">รหัสผ่าน:</label>
    <div class="col-2 col-sm-4 col-md-4">
        <input name="alumni_pass" type="password" class="form-control" id="alumni_pass" placeholder="ตัวเลข" value="<?php echo isset($_POST['alumni_pass']) ? $_POST['alumni_pass'] : ''; ?>" required />
    </div>
</div>

    <div class="form-group">
    <label class="col-sm-4 control-label" align="right"> รูปภาพ<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left"> 
      <p> เลือกรูปภาพ </p>
      <input type="file" name="img" id="img" class="form-control" required />
      <span class="reminder" style="color: red;"></span>
      <img width="80%" height="100%" id="previewImg" alt="" >
    </div>
    </div>

   
	<div class="form-group">
  <label class="col-sm-4 control-label" > รหัสนักศึกษา : <!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" >
      <input  name="alumni_id" type="text" readonly value="<?php echo $alumni_id;?>" class="form-control" id="alumni_id" placeholder="ตัวเลข"  />
    </div>
    </div>


    <div class="form-group">
	<label class="col-sm-4 control-label" align="right"> คำนำหน้า :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="alumni_gd" name="alumni_gd" required>
    <option value=""></option>
    <option value="นาย" <?php if ($alumni_gd == "นาย") echo 'selected="selected"'; ?>>นาย</option>
    <option value="นาง" <?php if ($alumni_gd == "นาง") echo 'selected="selected"'; ?>>นาง</option>
    <option value="นางสาว" <?php if ($alumni_gd == "นางสาว") echo 'selected="selected"'; ?>>นางสาว</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">ชื่อ : </label>
  <div class="col-2 col-sm-4 col-md-4" align="left">
    <font color="red">*</font>
    <input  name="alumni_name" type="text" value="<?php echo $alumni_name;?>" class="form-control" id="alumni_name" placeholder="ภาษาไทย" required/>
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">นามสกุล :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <font color="red">*</font>
      <input  name="alumni_surname" type="text" value="<?php echo $alumni_surname;?>" class="form-control" id="alumni_surname" placeholder="ภาษาไทย" required />
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right"> กลุ่มเรียน :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="section" name="section" required>
    <option value=""></option>
    <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ" <?php if ($section == "วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ") echo 'selected="selected"'; ?>>วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ</option>
    <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ" <?php if ($section == "วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ") echo 'selected="selected"'; ?>>วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">คณะ :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_faculty" type="text" readonly value="<?php echo $education_faculty;?>" class="form-control" id="education_faculty" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">สาขาวิชา :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_branch" type="text" readonly value="<?php echo $education_branch;?>" class="form-control" id="education_branch" placeholder="ภาษาไทย"  />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ที่อยู่<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-2" align="left">
      <input  name="house_no" type="text" value="<?php echo $house_no;?>" class="form-control" id="house_no" placeholder="บ้านเลขที่" required/>
      </div>
      <div class="col-2 col-sm-4 col-md-2">
      <input  name="village_no" type="text" value="<?php echo $village_no;?>" class="form-control" id="village_no" placeholder="หมู่ที่" required/>
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
        <input  name="sub_district" type="text" value="<?php echo $sub_district;?>" class="form-control" id="sub_district" placeholder="แขวง/ตำบล" required/>
    </div>
    <div  class="col-2 col-sm-4 col-md-2" >
        <input  name="district" type="text" value="<?php echo $district;?>" class="form-control" id="district" placeholder="เขต/อำเภอ" required/>
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
        <input  name="province" type="text" value="<?php echo $province;?>" class="form-control" id="province" placeholder="จังหวัด" required/>
    </div>
    <div class="col-2 col-sm-4 col-md-2">
        <input  name="postal_code" type="text" value="<?php echo $postal_code;?>" class="form-control" id="postal_code" placeholder="รหัสไปรษณีย์" required/>
    </div>
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">เบอร์โทรศัพท์ :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_tel" type="text" value="<?php echo $alumni_tel;?>" class="form-control" id="alumni_tel" placeholder="ตัวเลข" required />
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-4 control-label" align="right">email :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="alumni_mail" type="email" class="form-control" id="alumni_mail" placeholder="" required />
    </div>
</div>

    

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">ปีที่สำเร็จการศึกษา :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_year" type="text" readonly value="<?php echo $alumni_year;?>" class="form-control" id="alumni_year" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">รุ่นที่จบ :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_no" type="text" readonly value="<?php echo $alumni_no;?>" class="form-control" id="alumni_no" placeholder="ตัวเลข" />
    </div>
  </div>

  
  <div class="form-group">
    <label class="col-sm-4 control-label" align="right">ภาวะการมีงานทำ :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="job" name="job" required onchange="toggleFields()">
            <option value=""></option>
            <option value="มีงานทำ">มีงานทำ</option>
            <option value="ไม่มีงานทำ">ไม่มีงานทำ</option>
            <option value="เจ้าของกิจการ">เจ้าของกิจการ</option>
            <option value="ศึกษาต่อ">ศึกษาต่อ</option>
            <option value="มีงานทำและศึกษาต่อ">มีงานทำ และศึกษาต่อ</option>
        </select>
    </div>
</div>
<div class="form-group" id="showWork">
    <label class="col-sm-4 control-label" align="right">ท่านได้ทำงานตรงตามหลักสูตรหรือไม่ :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="work" name="work" >
            <option value=""></option>
            <option value="ตรงสาขา">ตรงสาขา</option>
            <option value="ไม่ตรงสาขา">ไม่ตรงสาขา</option>
        </select>
    </div>
</div>

<!-- Fields for working -->
<div id="workingFields" class="form-group" style="display: none;">
    <label class="col-sm-4 control-label" align="right">ตำแหน่งงาน :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="work_position" type="text" value="<?php echo $work_position;?>" class="form-control" id="work_position" placeholder="ชื่อสถานที่ทำงาน"  />
    </div>
        <hr>
        <hr>
    <label class="col-sm-4 control-label" align="right">สถานที่ทำงาน :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="work_workplace" type="text" value="<?php echo $work_workplace;?>" class="form-control" id="work_workplace" placeholder="ชื่อสถานที่ทำงาน"  />
    </div>
</div>

<!-- Fields for studying -->
<div id="studyingFields" class="form-group" style="display: none;">
    <label class="col-sm-4 control-label" align="right">ชื่อสถานศึกษา :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="study_university" type="text" value="<?php echo $study_university;?>" class="form-control" id="study_university" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
    </div>
      <hr>
    <label class="col-sm-4 control-label" align="right">ระดับการศึกษา :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="study_Gradelevel" type="text" value="<?php echo $study_Gradelevel;?>" class="form-control" id="study_Gradelevel" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
    </div>
      <hr>
      <hr>
    <label class="col-sm-4 control-label" align="right">คณะ :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="study_group" type="text" value="<?php echo $study_group;?>" class="form-control" id="study_group" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
    </div>
      <hr>
      <hr>
  <label class="col-sm-4 control-label" align="right">สาขา :<!--font color="red">*</font--></label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="study_Fieldofstudy" type="text" value="<?php echo $study_Fieldofstudy;?>" class="form-control" id="study_Fieldofstudy" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
    </div>
      <hr>
      <hr>
      
</div>

<!-- Additional fields for working and studying -->
<div id="workingAndStudyingFields" class="form-group" style="display: none;">
  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">ตำแหน่งงาน :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="work_position" type="text" value="<?php echo $work_position;?>" class="form-control" id="work_position" placeholder="ชื่อสถานที่ทำงาน"  />
      </div>
  </div>
 

  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">สถานที่ทำงาน :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="work_workplace" type="text" value="<?php echo $work_workplace;?>" class="form-control" id="work_workplace" placeholder="ชื่อสถานที่ทำงาน"  />
      </div>
  </div>


  <!-- Fields for studying -->

  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">ชื่อสถานศึกษา :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="study_university" type="text" value="<?php echo $study_university;?>" class="form-control" id="study_university" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
      </div>
  </div>


  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">ระดับการศึกษา :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="study_Gradelevel" type="text" value="<?php echo $study_Gradelevel;?>" class="form-control" id="study_Gradelevel" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
      </div>
  </div>


  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">คณะ :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="study_group" type="text" value="<?php echo $study_group;?>" class="form-control" id="study_group" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
      </div>
  </div>


  <div class="form-group">
      <label class="col-sm-4 control-label" align="right">สาขา :<!--font color="red">*</font--></label>
      <div class="col-2 col-sm-4 col-md-4" align="left">
          <input name="study_Fieldofstudy" type="text" value="<?php echo $study_Fieldofstudy;?>" class="form-control" id="study_Fieldofstudy" placeholder="ภาษาอังกฤษหรือภาษาไทย"  />
      </div>
  </div>

  
</div>




<!-- Fields for business owner -->
<div id="businessOwnerFields" class="form-group" style="display: none;">
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">ชื่อกิจการ :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="name_Businessowner" type="text" class="form-control" id="name_Businessowner" placeholder="ชื่อกิจการ"  />
        </div>
  </div> 
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">เลขที่ :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="No_Businessowner" type="text" class="form-control" id="No_Businessowner" placeholder="เลขที่"  />
        </div>
  </div> 
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">หมู่บ้าน :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="Village_Businessowner" type="text" class="form-control" id="Village_Businessowner" placeholder="หมู่บ้าน"  />
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">อำเภอ/เขต :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="district1_Businessowner" type="text" class="form-control" id="district1_Businessowner" placeholder="อำเภอ/เขต"  />
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">ตำบล/แขวง :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="district2_Businessowner" type="text" class="form-control" id="district2_Businessowner" placeholder="ตำบล/แขวง"  />
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">จังหวัด :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="province_Businessowner" type="text" class="form-control" id="province_Businessowner" placeholder="จังหวัด"  />
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">รหัสไปรษณีย์ :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="zipcode_Businessowner" type="text" class="form-control" id="zipcode_Businessowner" placeholder="รหัสไปรษณีย์"  />
        </div>
  </div>
  <div class="form-group">
        <label class="col-sm-4 control-label" align="right">เบอร์โทร :</label>
        <div class="col-2 col-sm-4 col-md-4" align="left">
            <input name="tel_Businessowner" type="text" class="form-control" id="tel_Businessowner" placeholder="เบอร์โทร"  />

          </div>  
  </div> 
</div>  


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function toggleFields() {
        var job = $('#job').val();
        if (job === 'มีงานทำ') {
            $('#workingFields').show();
            $('#studyingFields').hide();
            $('#workingAndStudyingFields').hide();
            $('#businessOwnerFields').hide();
            $('#showWork').show();
        } else if (job === 'ไม่มีงานทำ') {
            $('#workingFields').hide();
            $('#studyingFields').hide();
            $('#workingAndStudyingFields').hide();
            $('#businessOwnerFields').hide();
            $('#showWork').hide();
        } else if (job === 'ศึกษาต่อ') {
            $('#studyingFields').show();
            $('#workingFields').hide();
            $('#workingAndStudyingFields').hide();
            $('#businessOwnerFields').hide();
            $('#showWork').hide();
        } else if (job === 'มีงานทำและศึกษาต่อ') {
            $('#workingAndStudyingFields').show();
            $('#workingFields').hide();
            $('#studyingFields').hide();
            $('#businessOwnerFields').hide();
            $('#showWork').show();
        } else if (job === 'เจ้าของกิจการ') {
              $('#workingFields').hide();
              $('#studyingFields').hide();
              $('#workingAndStudyingFields').hide();
              $('#businessOwnerFields').show();
              $('#showWork').show();
        } else {
            $('#workingFields').hide();
            $('#studyingFields').hide();
            $('#workingAndStudyingFields').hide();
            $('#businessOwnerFields').hide();
        }
    }
    // Initial toggle based on current selection
    $(document).ready(function() {
        toggleFields();
    });
</script>













    



    
    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">ท่านต้องการ upskill ในด้านใด :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="upskill" type="text" value="<?php echo $upskill;?>" class="form-control" id="upskill" placeholder="" required />
     
    </div>
    </div>

    <div class="form-group">
	<label class="col-sm-4 control-label" align="right">ท่านต้องการ reskill ในด้านใด :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="reskill" type="text" value="<?php echo $reskill;?>" class="form-control" id="reskill" placeholder="" required />
     
    </div>
    </div>

    <div class="form-group">
    <label class="col-sm-4 control-label" align="right">รายได้เฉลี่ยต่อเดือน :<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <input name="income" type="text" value="<?php echo $income;?>" class="form-control" id="income" placeholder="ตัวเลข" required />
       
    </div>
</div>



	<?php include('./backend/script.php');?>

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>

<script>
    let imgInput = document.getElementById('img');
    let previewImg = document.getElementById('previewImg');

    imgInput.onchange = evt => {
        const [file] = imgInput.files;
        if (file) {
            previewImg.src = URL.createObjectURL(file);
            previewImg.style.display = 'block'; // Show the preview image
        }
    }
</script>

<script>
    // document.getElementById("alumni_mail").addEventListener("input", function() {
    //     var email = document.getElementById("alumni_mail").value;
    //     var gmailRegex = /^[a-zA-Z0-9._-]+@gmail.com$/;
    //     if (!gmailRegex.test(email)) {
    //         document.getElementById("alumni_mail").setCustomValidity("กรุณากรอกอีเมลในรูปแบบ gmail เท่านั้น");
    //     } else {
    //         document.getElementById("alumni_mail").setCustomValidity("");
    //     }
    // });
</script>


</body>
   
    
  
  <div class="form-group">
    <div class="col-sm-4 control-label"> </div>
    <div class="col-6col-1 col-sm-2 col-md-2"><br>
    
              <input type="hidden" name="p_id" value="<?php echo $no_id; ?>" />
             <input type="hidden" name="img2" value="<?php echo $img; ?>" />
             <button type="submit" class="btn btn-warning" id="btn" onclick="return validateForm();">
    <span class="glyphicon glyphicon-cog"></span> ลงทะเบียน
</button>

    </div>
    
  </div>
</form>

