<?php session_start(); ?>
<meta charset="UTF-8">
<?php
error_reporting( error_reporting() & ~E_NOTICE );
    
include('connections1.php');
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
  
<form action="update_profile_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-4 control-label">  </div>
    <div class="col-8" align="center">
      <br>
      <h4>เเก้ไขข้อมูลศิษย์เก่า </h4>
      
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
    <label class="col-sm-4 control-label" align="right">รูปภาพ<!--font color="red">*</font-->  </label>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <p> เลือกรูปภาพ (350px * 350px)</p>
    <input type="file" name="img" id="img" class="form-control" />
			<img src="./backend/img_alumni/<?php echo $row['img'];?>" width="300px">
    </div>
    </div>

   
	<div class="form-group">
    <div class="col-sm-4 control-label" align="right"> รหัสนักศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_id" type="text" value="<?php echo $alumni_id;?>" class="form-control" id="alumni_id" placeholder="ตัวเลข" />
    </div>
    </div>


    <div class="form-group">
	<div class="col-sm-4 control-label" align="right"> คำนำหน้า<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="alumni_gd" name="alumni_gd">
    <option value=""></option>
    <option value="นาย" <?php if ($alumni_gd == "นาย") echo 'selected="selected"'; ?>>นาย</option>
    <option value="นาง" <?php if ($alumni_gd == "นาง") echo 'selected="selected"'; ?>>นาง</option>
    <option value="นางสาว" <?php if ($alumni_gd == "นางสาว") echo 'selected="selected"'; ?>>นางสาว</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ชื่อ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_name" type="text" value="<?php echo $alumni_name;?>" class="form-control" id="alumni_name" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">นามสกุล<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_surname" type="text" value="<?php echo $alumni_surname;?>" class="form-control" id="alumni_surname" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right"> กลุ่มเรียน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="section" name="section">
    <option value=""></option>
    <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ" <?php if ($section == "วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ") echo 'selected="selected"'; ?>>วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ</option>
    <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ" <?php if ($section == "วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ") echo 'selected="selected"'; ?>>วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">คณะ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_faculty" type="text" value="<?php echo $education_faculty;?>" class="form-control" id="education_faculty" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">สาขาวิชา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_branch" type="text" value="<?php echo $education_branch;?>" class="form-control" id="education_branch" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ที่อยู่<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-2" align="left">
      <input  name="house_no" type="text" value="<?php echo $house_no;?>" class="form-control" id="house_no" placeholder="บ้านเลขที่" />
      </div>
      <div class="col-2 col-sm-4 col-md-2">
      <input  name="village_no" type="text" value="<?php echo $village_no;?>" class="form-control" id="village_no" placeholder="หมู่ที่" />
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="sub_district" type="text" value="<?php echo $sub_district;?>" class="form-control" id="sub_district" placeholder="แขวง/ตำบล" />
    </div>
    <div  class="col-2 col-sm-4 col-md-2" >
      <input  name="district" type="text" value="<?php echo $district;?>" class="form-control" id="district" placeholder="เขต/อำเภอ" />
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="province" type="text" value="<?php echo $province;?>" class="form-control" id="province" placeholder="จังหวัด" />
    </div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="postal_code" type="text" value="<?php echo $postal_code;?>" class="form-control" id="postal_code" placeholder="รหัสไปรษณีย์" />
    </div>
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">เบอร์โทรศัพท์<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_tel" type="text" value="<?php echo $alumni_tel;?>" class="form-control" id="alumni_tel" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">email<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_mail" type="text" value="<?php echo $alumni_mail;?>" class="form-control" id="alumni_mail" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ปีที่สำเร็จการศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_year" type="text" value="<?php echo $alumni_year;?>" class="form-control" id="alumni_year" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">รุ่นที่จบ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_no" type="text" value="<?php echo $alumni_no;?>" class="form-control" id="alumni_no" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right"> ภาวะการมีงานทำ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="job" name="job">
    <option value=""></option>
    <option value="มีงานทำ" <?php if ($job == "มีงานทำ") echo 'selected="selected"'; ?>>มีงานทำ</option>
    <option value="มีงานทำ และศึกษาต่อ" <?php if ($job == "มีงานทำ และศึกษาต่อ") echo 'selected="selected"'; ?>>มีงานทำ และศึกษาต่อ</option>
    <option value="ศึกษาต่อ" <?php if ($job == "ศึกษาต่อ") echo 'selected="selected"'; ?>>ศึกษาต่อ</option>
    <option value="ไม่มีงานทำ" <?php if ($job == "ไม่มีงานทำ") echo 'selected="selected"'; ?>>ไม่มีงานทำ</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right"> ท่านได้ทำงานตรงตามหลักสูตรหรือไม่<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
    <select id="work" name="work">
    <option value=""></option>
    <option value="ตรงสาขา" <?php if ($work == "ตรงสาขา") echo 'selected="selected"'; ?>>ตรงสาขา</option>
    <option value="ไม่ตรงสาขา" <?php if ($work == "ไม่ตรงสาขา") echo 'selected="selected"'; ?>>ไม่ตรงสาขา</option>
</select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ตำแหน่งงาน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="work_position" type="text" value="<?php echo $work_position;?>" class="form-control" id="work_position" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">สถานที่ทำงาน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="work_workplace" type="text" value="<?php echo $work_workplace;?>" class="form-control" id="work_workplace" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">สถานที่ทำงาน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-2" align="left">
      <input  name="work_workplace" type="text" value="<?php echo $work_workplace;?>" class="form-control" id="work_workplace" placeholder="ชื่อสถานที่ทำงาน" />
      </div>
      <div class="col-2 col-sm-4 col-md-2">
      <input  name="address_numbernw" type="text" value="<?php echo $address_numbernw;?>" class="form-control" id="address_numbernw" placeholder="เลขที่" />
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="moo" type="text" value="<?php echo $moo;?>" class="form-control" id="moo" placeholder="หมู่" />
    </div>
    <div  class="col-2 col-sm-4 col-md-2" >
      <input  name="subdistrict" type="text" value="<?php echo $subdistrict;?>" class="form-control" id="subdistrict" placeholder="แขวง/ตำบล" />
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="district_w" type="text" value="<?php echo $district_w;?>" class="form-control" id="district_w" placeholder="เขต/อำเภอ" />
    </div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="province_w" type="text" value="<?php echo $province_w;?>" class="form-control" id="province_w" placeholder="จังหวัด" />
    </div>
    <br>
    <br>
    <div class="col-sm-4 control-label" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="postal_codew" type="text" value="<?php echo $postal_codew;?>" class="form-control" id="postal_codew" placeholder="รหัสไปรษณีย์" />
    </div>
    </div>
    </div>

    

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ท่านต้องการ upskill ในด้านใด<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="upskill" type="text" value="<?php echo $upskill;?>" class="form-control" id="upskill" placeholder="" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">ท่านต้องการ reskill ในด้านใด<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="reskill" type="text" value="<?php echo $reskill;?>" class="form-control" id="reskill" placeholder="" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-sm-4 control-label" align="right">รายได้เฉลี่ยต่อเดือน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="income" type="text" value="<?php echo $income;?>" class="form-control" id="income" placeholder="ตัวเลข" />
    </div>
    </div>



	<?php include('./backend/script.php');?>

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
<script>
  function goBack() {
    window.history.back();
  }
</script>

</body>
   
    
  
  <div class="form-group">
    <div class="col-sm-4 control-label"> </div>
    <div class="col-6col-1 col-sm-2 col-md-2"><br>
              <input type="hidden" name="p_id" value="<?php echo $no_id; ?>" />
             <input type="hidden" name="img2" value="<?php echo $img; ?>" />
             <button type="submit" class="btn btn-warning" id="btn" style="background-color: #259b24; color: #FFFFFF;">
               <span class="glyphicon glyphicon-cog"></span> update</button>
            <button type="button" class="btn btn-warning" id="btn" style="background-color: #e51c23; color: #FFFFFF;" onclick="goBack()">
               <span class="glyphicon glyphicon-arrow-left"></span> Back</button>


    </div>
    
  </div>
</form>

