<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$about_id = $_GET["ID"];
//2. query ข้อมูลจากตาราง:
 $sql = "SELECT * FROM about_tbl WHERE about_id = '$about_id'";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

//print_r($row);

//echo $m_name = $row['m_name'];
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM about_tbl ORDER BY about_id asc" or die("Error:" . mysqli_error());
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /-->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<!--style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style-->
</head>     
<body>
		   
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-7"> <br />
      <h4 align="center">แก้ไขข่าวสาร</h4>
      <hr />
      <form   name="abouts" action="about_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
		<input type="hidden" name="about_id" value="<?php echo $about_id; ?>" />
        <input type="hidden" name="img2" value="<?php echo $about_pic; ?>" />
		
			
		<div class="form-group">
          <div class="col-sm-3" align="right">รูปข่าวสาร  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ (350px * 350px)</p>
            <input type="file" name="about_pic" id="about_pic" class="form-control" />
			<img src="about_img/<?php echo $row['about_pic'];?>" width="300px">
          
          </div>
        </div>
        
		<div class="form-group">
          <div class="col-sm-3" align="right"> หัวข้อ  </div>
          <div class="col-sm-5" align="left">*สูงสุด30ตัวอักษร 
            <input  name="about_topic" maxlength="30" type="text" value="<?php echo $about_topic; ?>" class="form-control" id="about_topic" placeholder="หัวข้อ" />
          </div>
        </div>
		
		
        <div class="form-group">
          <div class="col-sm-3" align="right">บทนำ</div>
          <div class="col-sm-5" align="left">*สูงสุด40ตัวอักษร 
            <input name="about_text" type="text" maxlength="40" value="<?php echo $about_text; ?>" class="form-control" id="about_text" placeholder="บทนำ" />
			
			
          </div>
        </div>
		
		
		<!--div class="form-group">
          <div class="col-sm-3" align="right"> เนื้อหา  </div>
		  <div class="col-sm-5" align="left">*สูงสุด255ตัวอักษร 
            
          
             <textarea  name="about_fulltext" rows="10" cols="80" maxlength="255" value="<?php echo $about_fulltext; ?>" class="form-control" id="about_fulltext" placeholder="เนื้อหา"  >                                       
                    </textarea>
          </div>
        </div-->
		
		<div class="form-group">
          <div class="col-sm-3" align="right"> เนื้อหา  </div>
          <div class="col-sm-5" align="left">*สูงสุด1500ตัวอักษร 
            <textarea  name="about_fulltext" rows="15" cols="80" maxlength="1500"  > <?php echo $about_fulltext; ?>                                      
                    </textarea>

          </div>
        </div>
       
	    <div class="form-group">
          <div class="col-sm-3" align="right">ลิ้งดูเพิ่มเติม...</div>
          <div class="col-sm-5" align="left">
            <input name="about_link" type="text"  value="<?php echo $about_link; ?>" class="form-control" id="about_link" placeholder="ลิ้งดูเพิ่มเติม..." />
			
			
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
				
		
