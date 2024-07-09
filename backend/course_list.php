<?php
 error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM course WHERE id ORDER BY id DESC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table id="example1" class="table table-bordered table-striped">';
                  //หัวข้อตาราง
                    echo "<thead>";
                    echo "<tr class='info'>
					            <th width='2%'>ลำดับ</th>
                      <th width='20%'>วัตถุประสงค์ของหลักสูตร</th>
                      <th width='20%'>คุณสมบัติผู้เข้าศึกษา</th>
                      <th width=20%>อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา</th>
                      <th width=10%>ระยะเวลาของหลักสูตร</th>
                      <th width=10%>ค่าใช้จ่าย</th>
                      <th width=20%>พื้นที่การเรียนการสอน</th>
                      <th width=20%>ไฟล์หลักสูตร</th>
                      <th width='2%'>แก้ไข</th>
                    </tr>";
                  echo "</thead>";
				  $i=1;
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
				  
				  echo "<td>" .$i .  "</td> ";

                    echo "<td>" .$row["objective"] .  "</td> ";
                    echo "<td>" .$row["qualification"] .  "</td> ";
                    echo "<td>" .$row["job"] .  "</td> ";
                    echo "<td>" .$row["time_cs"] .  "</td> ";
                    echo "<td>" .$row["pay"] .  "</td> ";
                    echo "<td>" .$row["area"] .  "</td> ";
                    echo '<td><a href="./uploads/' . $row["file_upload"] . '" target="_blank">' . $row["file_upload"] . '</a></td>';
                    //แก้ไขข้อมูล
                    echo "<td><a href='course.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                  
                  echo "</tr>";
				  $i++;
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>

