 <?php
 error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
      <div class="row">

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-aqua elevation-1"><i class="ionicons ion-ios-person"></i></span>

              <div class="info-box-content  ">
                <span class="info-box-text">จำนวนผู้ดูเเลระบบ</span>
                <span class="info-box-text">
				
				จำนวน : <?php 
				  $sql_all="select count(admin_id) as admin_id_all from tbl_admin";
				  $query_all=mysqli_query($con, $sql_all) or die ("Error in query: $sql_all " . mysqli_error());
				  $row_all = mysqli_fetch_array($query_all);
				  echo $row_all['admin_id_all'];
				  
				  ?> คน
				</span>
              </div>

              
              <!-- /.info-box-content -->
            </div>

            
            <!-- /.info-box -->
          </div>
          
    
           


      
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-yellow elevation-1"><i class="ion-android-people"></i></span>

              <div class="info-box-content  ">
                <span class="info-box-text">จำนวนสมาชิกศิษย์เก่า<br></span>
                <span class="info-box-text">
				
				จำนวน : <?php 
				  $sql_all="select count(no_id) as appeople_all from tbl_appeople";
				  $query_all=mysqli_query($con, $sql_all) or die ("Error in query: $sql_all " . mysqli_error());
				  $row_all = mysqli_fetch_array($query_all);
				  echo $row_all['appeople_all'];
				  
				  ?> คน
				</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-purple elevation-1"><i class="ionicons ion-document-text"></i></span>

              <div class="info-box-content  ">
                <span class="info-box-text">จำนวนข่าวสาร<br></span>
                <span class="info-box-text">
				
				จำนวน : <?php 
				  $sql_all="select count(about_id) as about_all from about_tbl";
				  $query_all=mysqli_query($con, $sql_all) or die ("Error in query: $sql_all " . mysqli_error());
				  $row_all = mysqli_fetch_array($query_all);
				  echo $row_all['about_all'];
				  
				  ?> ข่าวสาร
				</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-red elevation-1"><i class="ionicons ion-android-arrow-dropright-circle"></i></span>

              <div class="info-box-content  ">
                <span class="info-box-text">จำนวนวิดีโอ<br></span>
                <span class="info-box-text">
				
				จำนวน : <?php 
				  $sql_all="select count(video_id) as new_video_all from new_video_tbl";
				  $query_all=mysqli_query($con, $sql_all) or die ("Error in query: $sql_all " . mysqli_error());
				  $row_all = mysqli_fetch_array($query_all);
				  echo $row_all['new_video_all'];
				  
				  ?> วิดีโอ
				</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-gray elevation-1"><i class="ionicons ion-clipboard"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">จำนวนบุคลากร<br></span>
            <span class="info-box-text">
                จำนวน : <?php 
                    $sql_all = "SELECT COUNT(instructor_id) AS instructors_all FROM instructors";
                    $query_all = mysqli_query($con, $sql_all) or die ("Error in query: $sql_all " . mysqli_error($con));
                    $row_all = mysqli_fetch_array($query_all);
                    echo $row_all['instructors_all'];
                ?> คน
            </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        lengthChange: false,
	        buttons: [ 'excel']
			//buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>
     

     
    </body>

</html>