<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$video_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
 $sql = "SELECT * FROM new_video_tbl WHERE video_id = '$video_id'";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

//print_r($row);

//echo $m_name = $row['m_name'];
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM new_video_tbl ORDER BY video_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:


// $query2 = "SELECT p.*,t.type_name
// FROM tbl_product as p 
// INNER JOIN tbl_type as t ON p.type_id = t.type_id
// WHERE p_id = '$p_id';
// ORDER BY p.type_id asc" or die("Error:" . mysqli_error());
// //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
// $result2 = mysqli_query($con, $query2);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

?>
<!-- Latest compiled and minified CSS -->
<!DOCTYPE html>
<html>
<head>
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->

</head>     
<body>
		   
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center">แก้ไขวิดีโอ</h4>
      <hr />
      <form   name="news" action="new_video_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
		<input type="hidden" name="video_id" value="<?php echo $video_id; ?>" />
        <input type="hidden" name="video_name" value="<?php echo $video_name; ?>" />



        <div class="form-group">
          <div class="col-sm-3" align="right">เเก้ไขชื่อ video</div>
          <div class="col-sm-5" align="left">
            
            <input  name="video_name" type="text" value="<?php echo $video_name;?>" class="form-control" id="video_name" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
          
          </div>
        </div>
		
			
		<div class="form-group">
          <div class="col-sm-3" align="right">เเก้ไขวิดีโอ</div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกวิดีโอ </p>
            <input type="file" name="video_link" value="<?php echo $video_link;?>" class="form-control" id="video_link"  /> 
          </div>
        </div>
        
        <!--div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งรูปภาพ  </div>
          <div class="col-sm-5" align="left">
            <input  name="new_link" type="text" value="<?php echo $new_link; ?>" class="form-control" id="new_link" placeholder="ลิ้งรูปภาพ" />
          </div>
        </div!-->
		
		
       
        
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
				
		
