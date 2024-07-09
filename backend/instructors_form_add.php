<div class="container">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-10">
      <form  name="abouts" action="instructors_form_add_db.php" method="POST" id="abouts" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="center">
            <br>
            <h3> เพิ่มข้อมูลบุคลากร </h3>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="left">
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> รูป  </div>
          <div class="col-sm-5" align="left">
            <input type="file" name="photo" id="photo" class="form-control" />
          </div>
        </div>
        
		<div class="form-group">
          <div class="col-sm-3" align="right"> ชื่อ-นามสกุล  </div>
          <div class="col-sm-5" align="left"> 
            <input name="name_i" type="text"  class="form-control" id="name_i" placeholder="ชื่อ-นามสกุล" />
          </div>
        </div>
		
		
        <div class="form-group">
          <div class="col-sm-3" align="right"> บทบาทในหลักสูตร  </div>
          <div class="col-sm-5" align="left">
           <input name="position" type="text"  class="form-control" id="position" placeholder="" />
          </div>
        </div>
		
		<div class="form-group">
          <div class="col-sm-3" align="right"> คุณวุฒิ (สาขาวิชา) </div>
          <div class="col-sm-5" align="left">
          <textarea name="qualification" class="form-control" id="qualification" rows="4" placeholder=""></textarea>

          

          </div>
        </div>
	
        <div class="form-group">
          <div class="col-sm-3" align="right"> อีเมล  </div>
          <div class="col-sm-5" align="left">  
           <input name="email" type="text"  class="form-control" id="email" placeholder="" />
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