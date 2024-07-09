<?php session_start(); ?>
<meta charset="UTF-8">
<?php
error_reporting( error_reporting() & ~E_NOTICE );
    
include('connections.php');

$id = $usersID;
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM course WHERE id='$id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql ");
$row = mysqli_fetch_array($result);
extract($row);
?>

<form action="course_form_edit_db.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2">  </div>
    <div class="col-8" align="center">
      <br>
      <h4>เเก้ไขข้อมูลหลักสูตรการศึกษา
</h4>
      
    </div>
  </div>


		<div class="form-group">
     		ข้อมูลหลักสูตรการศึกษา
  		</div>

  <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2" align="right">
      <label for="id">
        ID :
      </label>
    </div>
    <div class="col-2 col-sm-4 col-md-1" align="left">
      <input  name="id" type="number" readonly value="<?php echo $usersID;?>" class="form-control" id="id" />
  </div>
  </div> 
  
  <div class="form-group">
  <div class="col-1 col-sm-2 col-md-2" align="right"> วัตถุประสงค์ของหลักสูตร </div>
  <div class="col-2 col-sm-4 col-md-8" align="left">
    <textarea name="objective" class="form-control" id="objective" placeholder="" style="width: 100%; height: 200px;"><?php echo $row['objective'];?></textarea>
  </div>
</div>



  <div class="form-group">
	  <div class="col-1 col-sm-2 col-md-2" align="right"> คุณสมบัติผู้เข้าศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
      <textarea  name="qualification" class="form-control" id="qualification" placeholder="" style="width: 100%; height: 150px;"> <?php echo $row['qualification'] ;?></textarea>
    </div>
  </div>

  <div class="form-group">
	  <div class="col-1 col-sm-2 col-md-2" align="right"> อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
      <textarea  name="job" class="form-control" id="job" placeholder="" style="width: 100%; height: 250px;"> <?php echo $row['job'] ;?></textarea> 
    </div>
  </div>

  <div class="form-group">
	  <div class="col-1 col-sm-2 col-md-2" align="right"> ระยะเวลาของหลักสูตร<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
      <input  name="time_cs" type="text" value="<?php echo $time_cs;?>" class="form-control" id="time_cs" placeholder="" />
    </div>
  </div>
  <div class="form-group">
	  <div class="col-1 col-sm-2 col-md-2" align="right"> ค่าใช้จ่าย<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
      <input  name="pay" type="text" value="<?php echo $pay;?>" class="form-control" id="pay" placeholder="" />
    </div>
  </div>
  <div class="form-group">
	  <div class="col-1 col-sm-2 col-md-2" align="right"> พื้นที่การเรียนการสอน<!--font color="red">*</font-->  </div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
      <input  name="area" type="text" value="<?php echo $area;?>" class="form-control" id="area" placeholder="" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2" align="right">ไฟล์หลักสูตร</div>
    <div class="col-2 col-sm-4 col-md-8" align="left">
        <?php if(!empty($file_upload)): ?>
            <p>ไฟล์ที่แนบไว้แล้ว: <a href="uploads/<?php echo htmlspecialchars($file_upload); ?>" target="_blank"><?php echo htmlspecialchars($file_upload); ?></a></p>
        <?php endif; ?>
        <input name="file_upload" type="file" class="form-control" id="file_upload" />
        <input type="hidden" name="existing_file" value="<?php echo htmlspecialchars($file_upload); ?>">
    </div>
</div>



	<?php include('script.php');?>

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>


</body>
   
    
  
  <div class="form-group">
    <div class="col-1 col-sm-2 col-md-2"> </div>
    <div class="col-6col-1 col-sm-2 col-md-2"><br>
	<button type="submit" class="btn btn-warning" id="btn"> <span class="
            glyphicon glyphicon-cog"></span> Edit  </button>
    </div>
    
  </div>
</form>
