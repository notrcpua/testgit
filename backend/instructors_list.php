 <?php
  error_reporting(error_reporting() & ~E_NOTICE);
  //1. เชื่อมต่อ database:
  include('connections.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //2. query ข้อมูลจากตาราง tb_admin:
  $query = "SELECT * FROM instructors ORDER BY instructor_id ASC" or die("Error:" . mysqli_error());
  //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
  $result = mysqli_query($con, $query);
  //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
  echo ' <table id="example1" class="table table-bordered table-striped" >';
  //หัวข้อตาราง
  echo "<thead>";
  echo "<tr class='info'>
					<th width='1%'>ลำดับ</th>
          <th width=5%>รูปภาพ</th>
          <th width=30%>ชื่อ-นามสกุล</th>
					<th width=40%>บทบาทในหลักสูตร</th>
					<th width=60%>คุณวุฒิ (สาขาวิชา)</th>
          <th width=50%>อีเมล</th>
					<th width=1%>แก้ไข</th>
          <th width=1%>ลบ</th>
                    </tr>";
  echo "</thead>";
  $i = 1;
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";

    echo "<td>" . $i .  "</td> ";

    echo "<td>" . "<img src='instructors_img/" . $row['photo'] . "' width='100'>" . "</td>";
    echo "<td>" . $row["name_i"] .  "</td> ";
    echo "<td>" . $row["position"] .  "</td> ";
    echo "<td>" . $row["qualification"] .  "</td> ";
    echo "<td>" .$row["email"] .  "</td> ";

    //แก้ไขข้อมูล
    echo "<td><a href='instructors.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";

    //ลบข้อมูล
    echo "<td><a href='instructors_form_del_db.php?ID=$row[0] &name_i=$row[photo]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    $i++;
  }
  echo "</table>";
  //5. close connection
  mysqli_close($con);
  ?>



        