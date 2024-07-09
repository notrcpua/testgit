<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$instructor_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
 $sql = "SELECT * FROM instructors WHERE instructor_id = '$instructor_id'";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM instructors ORDER BY instructor_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<!-- Latest compiled and minified CSS -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

</head>     
<body>
		   
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center">แก้ไขข้อมูลบุคลากร</h4>
      <hr />
      <form   name="abouts" action="instructors_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
		<input type="hidden" name="instructor_id" value="<?php echo $instructor_id; ?>" />
        <input type="hidden" name="img2" value="<?php echo $photo; ?>" />
		
			
        <div class="form-group">
          <div class="col-sm-3" align="right"> รูป  </div>
          <div class="col-sm-5" align="left">
            <input type="file" name="photo" id="photo" class="form-control" />
            <img src="instructors_img/<?php echo $row['photo'];?>" width="300px">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> ชื่อ-นามสกุล  </div>
          <div class="col-sm-5" align="left"> 
            <input name="name_i" type="text" value="<?php echo $name_i; ?>" class="form-control" id="name_i" placeholder="ชื่อ-นามสกุล" />
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> บทบาทในหลักสูตร  </div>
          <div class="col-sm-5" align="left">
           <input name="position" type="text"  value="<?php echo $position; ?>" class="form-control" id="position" placeholder="" />
          </div>
        </div>
		
		<div class="form-group">
          <div class="col-sm-3" align="right"> คุณวุฒิ (สาขาวิชา) </div>
          <div class="col-sm-5" align="left">
          <textarea name="qualification" class="form-control" id="qualification" rows="4" placeholder=""><?php echo $qualification; ?></textarea>

          </div>
        </div>
	
        <div class="form-group">
          <div class="col-sm-3" align="right"> อีเมล  </div>
          <div class="col-sm-5" align="left">  
           <input name="email" type="text"  value="<?php echo $email; ?>" class="form-control" id="email" placeholder="" />
          </div>
        </div>
	   
        
        <div class="form-group">
          <div class="col-sm-3"> </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success" name="btnadd"> แก้ไข </button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>
</body>
</html>	
				
		
