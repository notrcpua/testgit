<?php include('bootst.php');?>
<div class="container">
  <div class="row">
    
  </div>
  <div class="row">
    <div class="col-md-5">
      
    </div>
    <div class="col-md-10">
      <form  name="abouts" action="about_form_add_db.php" method="POST" id="abouts" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="center">
            <br>
            <h3> เพิ่มประชาสัมพันธ์ </h3>
            
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">  </div>
          <div class="col-sm-5" align="left">
           
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3" align="right"> รูปข่าวสาร  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ (350px * 350px)</p>
            <input type="file" name="about_pic" id="about_pic" class="form-control" />
          
          </div>
        </div>
        
		<div class="form-group">
          <div class="col-sm-3" align="right"> หัวข้อ  </div>
          <div class="col-sm-5" align="left">*สูงสุด30ตัวอักษร 
            <input name="about_topic" type="text" maxlength="30" class="form-control" id="about_topic" placeholder="หัวเรื่อง" />
          </div>
        </div>
		
		
        <div class="form-group">
          <div class="col-sm-3" align="right"> บทนำ  </div>
          <div class="col-sm-5" align="left">  *สูงสุด40ตัวอักษร 
           <input name="about_text" type="text" maxlength="40"  class="form-control" id="about_text" placeholder="บทนำ" />
          </div>
        </div>
		
		<!--div class="form-group">
          <div class="col-sm-3" align="right"> เนื้อหา  </div>
		  <div class="col-sm-5" align="left">
            
            
             <textarea  name="about_fulltext"  rows="10" cols="80"  maxlength="255" class="form-control" id="about_fulltext" placeholder="เนื้อหา" >                                       
                    </textarea>
          </div>
        </div-->
		
		<div class="form-group">
          <div class="col-sm-3" align="right"> เนื้อหา  </div>
          <div class="col-sm-5" align="left">*สูงสุด1500ตัวอักษร 
            <textarea id="about_fulltext" name="about_fulltext" rows="15" cols="80" maxlength="1500" placeholder="เนื้อหา" />                                       
                    </textarea>

          </div>
        </div>
		<!--div class="form-group">
          <div class="col-sm-3" align="right"> เนื้อหา  </div>
          <div class="col-sm-5" align="left">  *สูงสุด1500ตัวอักษร 
           <input name="about_fulltext" type="text" maxlength="1500"  class="form-control" id="about_fulltext" placeholder="ข้อความ" />
          </div>
        </div-->
        <div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งดูเพิ่มเติม...  </div>
          <div class="col-sm-5" align="left">  
           <input name="about_link" type="text"   class="form-control" id="about_link" placeholder="ลิ้งดูเพิ่มเติม.." />
          </div>
        </div>
		<!--div class="form-group">
          <div class="col-sm-3" align="right"> รูปที่2  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ </p>
            <input type="file" name="new_pic" id="new_pic" class="form-control" />
          
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งรูปภาพที่2  </div>
          <div class="col-sm-5" align="left">
            <input  name="new_link" type="text"  class="form-control" id="new_link" placeholder="ลิ้งรูปภาพ" />
          </div>
        </div>
		<div class="form-group">
          <div class="col-sm-3" align="right"> รูปที่3  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ </p>
            <input type="file" name="new_pic" id="new_pic" class="form-control" />
          
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งรูปภาพที่3  </div>
          <div class="col-sm-5" align="left">
            <input  name="new_link" type="text"  class="form-control" id="new_link" placeholder="ลิ้งรูปภาพ" />
          </div>
        </div>
		<div class="form-group">
          <div class="col-sm-3" align="right"> รูปที่4  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ </p>
            <input type="file" name="new_pic" id="new_pic" class="form-control" />
          
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งรูปภาพที่4  </div>
          <div class="col-sm-5" align="left">
            <input  name="new_link" type="text"  class="form-control" id="new_link" placeholder="ลิ้งรูปภาพ" />
          </div>
        </div>
		<div class="form-group">
          <div class="col-sm-3" align="right"> รูปที่5  </div>
          <div class="col-sm-5" align="left">
            
            <p> เลือกรูปภาพ </p>
            <input type="file" name="new_pic" id="new_pic" class="form-control" />
          
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-3" align="right"> ลิ้งรูปภาพที่5  </div>
          <div class="col-sm-5" align="left">
            <input  name="new_link" type="text"  class="form-control" id="new_link" placeholder="ลิ้งรูปภาพ" />
          </div>
        </div!-->
		
        
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