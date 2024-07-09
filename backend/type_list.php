<?php
error_reporting( error_reporting() & ~E_NOTICE );
//1. เชื่อมต่อ database:
include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM tbl_type ORDER BY type_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered table-striped">';
  //หัวข้อตาราง
  echo "<thead>";
    echo "<tr class='info'>
	<th width='5%'>ลำดับ</th>
      <th width='5%'>รหัสประเภทสินค้า</th>
      <th width=2z0%>ประเภทสินค้า</th>
      <th width=5%>แก้ไข</th>
    </tr>";
  echo "</thead>";
  $i=1;
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" .$i .  "</td> ";
    echo "<td>" .$row["type_id"] .  "</td> ";
    echo "<td>" .$row["type_name"] .  "</td> ";
   
    //แก้ไขข้อมูล
    echo "<td><a href='type.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    
    //ลบข้อมูล
    //echo "<td><a href='type_form_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  $i++;
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>