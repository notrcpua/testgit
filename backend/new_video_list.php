<?php
 error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM new_video_tbl ORDER BY video_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table id="example1" class="table table-bordered table-striped">';
                  //หัวข้อตาราง
                    echo "<thead>";
                    echo "<tr class='info'>
					<th width='1%'>ลำดับ</th>

                      <th width='10%'>ชื่อ video</th>
                      <th width='10%'>วิดีโอ</th>
                      
                      
                      <th width=5%>ลบ</th>
                    </tr>";
                  echo "</thead>";
				  $i=1;
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
				  
				  echo "<td>" .$i .  "</td> ";

                    echo "<td>" .$row["video_name"] .  "</td> ";
                    echo "<td align=center>"."<video controls width='450px' height='300px'> <source src='./new_video/".$row['video_link']."'>" ."</video> </td>";
                    //echo "<td>" .$row["new_link"] .  "</td> "; เพิ่มลิ้งรูปภาพ
					
                    //echo "<td>" .$row["admin_name"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='new_video.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='new_video_form_del_db.php?ID=$row[0] &video_link=$row[video_name]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
				  $i++;
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>



        