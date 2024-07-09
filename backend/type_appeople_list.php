<style>
    

    /* กำหนดความกว้างของคอลัมน์และป้องกันข้อความขึ้นบรรทัดใหม่ */
    #example1 th,
    #example1 td {
        white-space: nowrap;
    }

    /* กำหนดรูปแบบของตาราง */
    #example1 td,
    #example1 th {
        border: 1px solid #afbfff;
        text-align: left;
        /* padding: 10px; */
    }

    /* กำหนดสีพื้นหลังของหัวตาราง */
    #example1 th {
        background-color: #91a7ff;
    }
    
</style>

<?php
    error_reporting(error_reporting() & ~E_NOTICE);
    include('connections.php');

    $query = "SELECT * FROM tbl_appeople ORDER BY no_id DESC";
    $result = mysqli_query($con, $query);

    echo '<table id="example1" class="table table-bordered table-striped">';
    echo "<thead>";
    echo "<tr class='info'>
        <th width='3%'>ลำดับ</th>
        <th width='5%'>รูปภาพ</th>
        <th width='50%'>รหัสนักศึกษา</th>
        <th width='8%'>คำนำหน้า</th>
        <th width='8%'>ชื่อ</th>
        <th width='8%'>นามสกุล</th>
        <th width='8%'>กลุ่มเรียน</th>
        <th width='5%'>คณะ</th>
        <th width='15%'>สาขาวิชา</th>
        <th width='15%'>บ้านเลขที่</th>
        <th width='15%'>หมู่ที่</th>
        <th width='15%'>แขวง/ตำบล</th>
        <th width='15%'>เขต/อำเภอ</th>
        <th width='15%'>จังหวัด</th>
        <th width='15%'>รหัสไปรษณีย์</th>
        <th width='10%'>เบอร์โทรศัพท์</th>
        <th width='10%'>Email</th>
        <th width='5%'>ปีที่สำเร็จการศึกษา</th>
        <th width='10%'>รุ่นที่จบ</th>
        <th width='100%'>ภาวะการมีงานทำ</th>
        <th width='100%'>ท่านได้ทำงานที่ตรงสายหรือไม่</th>
        <th width='2%'>ตำแหน่งงาน</th>
        <th width='2%'>สถานที่ทำงาน</th>

        <th width=2%>ชื่อสถานที่ทำงาน</th>
        <th width=2%>เลขที่</th>
        <th width=2%>แขวง/ตำบล</th>
        <th width=2%>เขต/อำเภอ</th>
        <th width=2%>จังหวัด</th>
        <th width=2%>รหัสไปรษณีย์</th>

        <th width='10%'>ท่านต้องการ upskill ในด้านใด</th>
        <th width='10%'>ท่านต้องการ reskill ในด้านใด</th>
        <th width='10%'>รายได้เฉลี่ยต่อเดือน</th>
        <th width='2%'>แก้ไข</th>
        <th width='2%'>ลบ</th>
    </tr>";
    echo "</thead>";

    $i = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $i . "</td> ";
        echo "<td>" . "<img src='img_alumni/" . $row['img'] . "' width='100'>" . "</td>";
        echo "<td>" . $row["alumni_id"] . "</td> ";
        echo "<td>" . $row["alumni_gd"] . "</td> ";
        echo "<td>" . $row["alumni_name"] . "</td> ";
        echo "<td>" . $row["alumni_surname"] . "</td> ";
        echo "<td>" . $row["section"] . "</td> ";
        echo "<td>" . $row["education_faculty"] . "</td> ";
        echo "<td>" . $row["education_branch"] . "</td> ";
        echo "<td>" .$row["house_no"] .  "</td> ";
        echo "<td>" .$row["village_no"] .  "</td> ";
        echo "<td>" .$row["sub_district"] .  "</td> ";
        echo "<td>" .$row["district"] .  "</td> ";
        echo "<td>" .$row["province"] .  "</td> ";
        echo "<td>" .$row["postal_code"] .  "</td> ";
        echo "<td>" . $row["alumni_tel"] . "</td> ";
        echo "<td>" . $row["alumni_mail"] . "</td> ";
        echo "<td>" . $row["alumni_year"] . "</td> ";
        echo "<td>" . $row["alumni_no"] . "</td> ";
        echo "<td>" . $row["job"] . "</td> ";
        echo "<td>" . $row["work"] . "</td> ";
        echo "<td>" . $row["work_position"] . "</td> ";
        echo "<td>" . $row["work_workplace"] . "</td> ";

        echo "<td>" .$row["address_numbernw"] .  "</td> ";
        echo "<td>" .$row["moo"] .  "</td> ";
        echo "<td>" .$row["subdistrict"] .  "</td> ";
        echo "<td>" .$row["district_w"] .  "</td> ";
        echo "<td>" .$row["province_w"] .  "</td> ";
        echo "<td>" .$row["postal_codew"] .  "</td> ";
        echo "<td>" . $row["upskill"] . "</td> ";
        echo "<td>" . $row["reskill"] . "</td> ";
        echo "<td>" . $row["income"] . "</td> ";

        echo "<td><a href='type_appeople.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
        echo "<td><a href='type_appeople_form_del.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
        echo "</tr>";
        $i++;
    }
    echo "</table>";

    mysqli_close($con);
?>
