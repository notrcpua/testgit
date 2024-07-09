<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"-->
<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$admin_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_admin WHERE admin_id='$admin_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>
<div class="container">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-10">
      
      <form  name="register" action="admin_form_edit_db.php" method="POST" id="register" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="center">
            <br>
            <h3> เเก้ไขข้อมูลผู้ดูเเลระบบ </h3>
            
          </div>
        </div>
        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="left">
            <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3" align="right"> Username  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_user" type="text" required class="form-control" id="admin_user" value="<?=$admin_user;?>" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> Password  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_pass" type="text" required class="form-control" id="admin_pass" value="<?=$admin_pass;?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3" align="right"> ชื่อ-สกุล  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_name" type="text" required class="form-control" id="admin_name" value="<?=$admin_name;?>"placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        
        
        
        <div class="form-group">
          <div class="col-sm-3"> </div>
          <div class="col-sm-6">
           
            <button type="submit" class="btn btn-warning" id="btn"> <span class="
            glyphicon glyphicon-cog"></span> Edit  </button>
            
          </div>
          
        </div>
      </form>
    </div>
  </div>
  
</div>