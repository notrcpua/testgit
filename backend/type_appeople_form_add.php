<?php session_start(); ?>
<meta charset="UTF-8">

<?php
error_reporting(error_reporting() & ~E_NOTICE);

include 'connections.php';
?>


<form  name="register" action="type_appeople_form_add_db.php" method="POST" class="form-horizontal " enctype="multipart/form-data"
>
  <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2">  </div>
    <div class="col-sm-8" align="center">
      <br>
      <h4>เพิ่มข้อมูลศิษย์เก่า</h4>
    </div>
  </div>
        
    <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2" align="right"> รูปภาพ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left"> 
      <p> เลือกรูปภาพ </p>
      <input type="file" name="img" id="img" class="form-control"/>
      <img width="80%" height="100%" id="previewImg" alt=""> 
    </div>
    </div>
    
    
	<div class="form-group">
    <div class="col-1 col-sm-2 col-md-2" align="right"> รหัสนักศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_id" type="text"  class="form-control" id="alumni_id" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right"> คำนำหน้า<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="alumni_gd " name="alumni_gd">
            <option value=""></option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
    </div>
  </div>

  <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ชื่อ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_name" type="text"  class="form-control" id="alumni_name" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">นามสกุล<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_surname" type="text"  class="form-control" id="alumni_surname" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">กลุ่มเรียน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="section " name="section">
            <option value=""></option>
            <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ">วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 1 ปริญญาตรี (4-5ปี) ภาคปกติ</option>
            <option value="วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ">วท.บ.วิทยาการคอมพิวเตอร์ กลุ่ม 2 ปริญญาตรี (ต่อเนื่อง/เทียบโอน) ภาคปกติ</option>
        </select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">คณะ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_faculty" type="text"  class="form-control" id="education_faculty" placeholder="ภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">สาขาวิชา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="education_branch" type="text"  class="form-control" id="education_branch" placeholder="ภาษาไทย" />
    </div>
    </div>


    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ที่อยู่<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-2" align="left">
      <input  name="house_no" type="text" class="form-control" id="house_no" placeholder="บ้านเลขที่" />
      </div>
      <div class="col-2 col-sm-4 col-md-2">
      <input  name="village_no" type="text" class="form-control" id="village_no" placeholder="หมู่ที่" />
    </div>
    <br>
    <br>
    <div class="col-1 col-sm-2 col-md-2" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="sub_district" type="text" class="form-control" id="sub_district" placeholder="แขวง/ตำบล" />
    </div>
    <div  class="col-2 col-sm-4 col-md-2" >
      <input  name="district" type="text" class="form-control" id="district" placeholder="เขต/อำเภอ" />
    </div>
    <br>
    <br>
    <div class="col-1 col-sm-2 col-md-2" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="province" type="text" class="form-control" id="province" placeholder="จังหวัด" />
    </div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="postal_code" type="text" class="form-control" id="postal_code" placeholder="รหัสไปรษณีย์" />
    </div>
    </div>
    

        <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2" align="right">เบอร์โทรศัพท์<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_tel" type="text" class="form-control" id="alumni_tel" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">email<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_mail" type="text"  class="form-control" id="alumni_mail" placeholder="" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ปีที่สำเร็จการศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_year" type="text"  class="form-control" id="alumni_year" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">รุ่นที่จบ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="alumni_no" type="text"  class="form-control" id="alumni_no" placeholder="ตัวเลข" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ภาวะการมีงานทำ<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="job " name="job">
            <option value=""></option>
            <option value="มีงานทำ">มีงานทำ</option>
            <option value="มีงานทำ และศึกษาต่อ">มีงานทำ และศึกษาต่อ</option>
            <option value="ศึกษาต่อ">ศึกษาต่อ</option>
            <option value="ไม่มีงานทำ">ไม่มีงานทำ</option>
        </select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ท่านได้ทำงานตรงตามหลักสูตรหรือไม่<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
        <select id="work " name="work">
            <option value=""></option>
            <option value="ตรงสาขา">ตรงสาขา</option>
            <option value="ไม่ตรงสาขา">ไม่ตรงสาขา</option>
        </select>
    </div>
  </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ตำแหน่งงาน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="work_position" type="text"  class="form-control" id="work_position" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">สถานที่ทำงาน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-2" align="left">
      <input  name="work_workplace" type="text" class="form-control" id="work_workplace" placeholder="ชื่อสถานที่ทำงาน" />
      </div>
      <div class="col-2 col-sm-4 col-md-2">
      <input  name="address_numbernw" type="text" class="form-control" id="address_numbernw" placeholder="เลขที่" />
    </div>
    <br>
    <br>
    <div class="col-1 col-sm-2 col-md-2" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="moo" type="text" class="form-control" id="moo" placeholder="หมู่" />
    </div>
    <div  class="col-2 col-sm-4 col-md-2" >
      <input  name="subdistrict" type="text" class="form-control" id="subdistrict" placeholder="แขวง/ตำบล" />
    </div>
    <br>
    <br>
    <div class="col-1 col-sm-2 col-md-2" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="district_w" type="text" class="form-control" id="district_w" placeholder="เขต/อำเภอ" />
    </div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="province_w" type="text" class="form-control" id="province_w" placeholder="จังหวัด" />
    </div>
    <br>
    <br>
    <div class="col-1 col-sm-2 col-md-2" align="right"></div>
    <div class="col-2 col-sm-4 col-md-2">
      <input  name="postal_codew" type="text" class="form-control" id="postal_codew" placeholder="รหัสไปรษณีย์" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ท่านต้องการ upskill ในด้านใด<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="upskill" type="text"  class="form-control" id="upskill" placeholder="" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">ท่านต้องการ reskill ในด้านใด<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="reskill" type="text"  class="form-control" id="reskill" placeholder="" />
    </div>
    </div>

    <div class="form-group">
	<div class="col-1 col-sm-2 col-md-2" align="right">รายได้เฉลี่ยต่อเดือน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-4" align="left">
      <input  name="income" type="text"  class="form-control" id="income" placeholder="ตัวเลข" />
    </div>
    </div>

    
	<?php include 'script.php';?>

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

</body>


  <div class="form-group">
    <div class="col-2 col-sm-4 col-md-4"> </div>
    <div class="col-sm-6"><br>
      <button type="submit" name="submit" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> บันทึก  </button>
  </div>
  </div>

</form>
<?php
