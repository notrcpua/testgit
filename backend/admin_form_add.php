<?php include('bootst.php');?>
<div class="container">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-10">
      <form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="center">
            <br>
            <h3>เพิ่มผู้ดูแลระบบ</h3>
            
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="left">
            <font color="red"> *กรุณากรอกข้อมูลให้ครบทุกช่อง </font>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3" align="right"> Username  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_user" type="text" required class="form-control" id="admin_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> Password  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_pass" type="password" required class="form-control" id="admin_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3" align="right"> ชื่อ-สกุล  </div>
          <div class="col-sm-5" align="left">
            <input  name="admin_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        
        
        
        <div class="form-group">
          <div class="col-sm-3"> </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-danger" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>
            
          </div>
          
        </div>
      </form>
    </div>
  </div>
  
</div>