<!DOCTYPE html>
<html>
<head>
    <title>ลงทะเบียนศิษย์เก่า</title>
    <link href="css/search.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css1/style.css" rel="stylesheet">
    

    

    <style>
        
    body {
    padding-top: 80px; /* Adjust this value to match the height of your navbar */
    }
   
.footer-col ul li {
  display: inline-flex;
  margin-right: 20px; /* ปรับระยะห่างตามต้องการ */
  white-space: nowrap; /* ป้องกันการตกบรรทัด */
}

.footer .container {
  display: flex;
  justify-content: space-between;
}
.footer .container > * {
  margin: 0 141px; /* เพิ่ม margin ซ้ายและขวา 5px ให้กับแต่ละองค์ประกอบ */
}

/* เมื่อนำเมาส์ไปชี้ */
.text-light a:hover {
  color: blue; /* สีข้อความเมื่อชี้ */
}
.text-light a {
  color: black; /* ใช้สีที่ถูกสืบทอดมา */
}
/* Don't forget include bootstrap 5.3.0 */
.gradient-pp{
  background: linear-gradient(4deg, #1a237e, #9575cd);
}

.title{
  color: #fff;
  font-size: 3em;
}

.waves {
    position: relative;
    width: 100%;
    height: 20vh;
    margin-bottom: -30px;
    min-height: 100px;
    max-height: 150px
}

.waves.no-animation .moving-waves>use {
    animation: none
}

.wave-rotate {
    transform: rotate(180deg)
}

.moving-waves>use {
    animation: f 40s cubic-bezier(.55,.5,.45,.5) infinite
}

.moving-waves>use:first-child {
    animation-delay: -2s;
    animation-duration: 11s
}

.moving-waves>use:nth-child(2) {
    animation-delay: -4s;
    animation-duration: 13s
}

.moving-waves>use:nth-child(3) {
    animation-delay: -3s;
    animation-duration: 15s
}

.moving-waves>use:nth-child(4) {
    animation-delay: -4s;
    animation-duration: 20s
}

.moving-waves>use:nth-child(5) {
    animation-delay: -4s;
    animation-duration: 25s
}

.moving-waves>use:nth-child(6) {
    animation-delay: -3s;
    animation-duration: 30s
}

@keyframes f {
    0% {
        transform: translate3d(-90px,0,0)
    }

    to {
        transform: translate3d(85px,0,0)
    }
}
@keyframes moveWaves {
    0% {
      transform: translateY(0);
    }
    100% {
      transform: translateY(100%);
    }
  }

  /* ให้กำหนดความสูงและตำแหน่งของตัว <div> ที่ห่อหุ้ม <svg> */
  .position-absolute {
    height: 10px; /* แก้ตามความต้องการ */
    position: absolute;
    bottom: 0;
    left: 0; /* แก้ตามความต้องการ */
    width: 100%; /* แก้ตามความต้องการ */
  }

  

  
        </style>
        
<script>
        // ฟังก์ชั่นเพื่อล้างช่องป้อนข้อมูลและแสดงผลลัพธ์
        function clearFieldsAndResults() {
            // ล้างช่องป้อนข้อมูล
            document.getElementsByName('alumni_name')[0].value = '';
            document.getElementsByName('alumni_surname')[0].value = '';
            document.getElementsByName('education_branch')[0].value = '';

            // ล้างผลลัพธ์ที่แสดง
            document.getElementById('searchResults').innerHTML = '';
        }
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0 fixed-top">
        <a href="index.php" class="navbar-brand p-0">
            <h4 class="m-0 text-uppercase text-primary"><img src="./img/cs.png" alt="" width="80" height="50"></i>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
                <a href="index.php" class="nav-item nav-link ">หน้าแรก</a>
                <a href="instructors.php" class="nav-item nav-link">บุคลากร</a>
                <a href="course.php" class="nav-item nav-link ">หลักสูตรการศึกษา</a>
                <a href="search.php" class="nav-item nav-link active">ลงทะเบียนศิษย์เก่า</a>
            </div>
            <div class="d-none d-lg-flex align-items-center ps-4">
                <i class="bi bi-box-arrow-in-right h2 text-secondary me-3"></i>
            <div>
                <h5 class="text-primary mb-1"><small>เจ้าหน้าที่</small></h5>
                <h6 class="text-light m-0"><a href="index_login2.php">เข้าสู่ระบบ</a></h6>
        </div>
    </div>
            </div>
        </div>
    </nav>
</body>
<body>
<section class="gradient-pp vh-100" >
  <div class="container">
    <h2 class="title text-center pt-5">ลงทะเบียนศิษย์เก่า</h2>
  </div>
  <div class="position-absolute w-100 bottom-0" >
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="moving-waves">
          <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40)" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
          <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
          <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
          <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1)" />
        </g>
      </svg>
    </div>

<div class="form-container">
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label style="color: #fff;">ชื่อ: </label>
    <input type="text" name="alumni_name" value="<?php echo isset($_GET['alumni_name']) ? htmlspecialchars($_GET['alumni_name']) : ''; ?>">
    
    <label style="color: #fff;">นามสกุล: </label>
    <input type="text" name="alumni_surname" value="<?php echo isset($_GET['alumni_surname']) ? htmlspecialchars($_GET['alumni_surname']) : ''; ?>">
    
    <!-- <label style="color: #fff;">สาขาวิชา: </label>
    <input type="text" name="education_branch" value="<?php echo isset($_GET['education_branch']) ? htmlspecialchars($_GET['education_branch']) : ''; ?>"><br>
        <div class="button-container">
        <input type="submit" value="ค้นหา" class="search-btn">
        <button type="button" onclick="clearFieldsAndResults()" class="cancel-btn">ยกเลิก</button>
        </div> <!-- Button to clear input fields and results 
        <div>-->
        <label style="color: #fff;">สาขาวิชา: </label>
    <select name="education_branch">
        <option value="">เลือกสาขาวิชา</option>
        <option value="วิทยาการคอมพิวเตอร์"<?php if (isset($_GET['education_branch']) && $_GET['education_branch'] == 'วิทยาการคอมพิวเตอร์') echo ' selected'; ?>>วิทยาการคอมพิวเตอร์</option>
        <option value="วิทยาศาสตร์และเทคโนโลยีการอาหาร"<?php if (isset($_GET['education_branch']) && $_GET['education_branch'] == 'วิทยาศาสตร์และเทคโนโลยีการอาหาร') echo ' selected'; ?>>วิทยาศาสตร์และเทคโนโลยีการอาหาร</option>
        <option value="พืชศาสตร์"<?php if (isset($_GET['education_branch']) && $_GET['education_branch'] == 'พืชศาสตร์') echo ' selected'; ?>>พืชศาสตร์</option>
        <option value="สัตวศาสตร์"<?php if (isset($_GET['education_branch']) && $_GET['education_branch'] == 'สัตวศาสตร์') echo ' selected'; ?>>สัตวศาสตร์</option>
        <option value="เพาะเลี้ยงสัตว์น้ํา"<?php if (isset($_GET['education_branch']) && $_GET['education_branch'] == 'เพาะเลี้ยงสัตว์น้ํา') echo ' selected'; ?>>เพาะเลี้ยงสัตว์น้ํา</option>
        <!-- Add more options as needed -->
    </select><br>

        <div class="button-container">
            <input type="submit" value="ค้นหา" class="search-btn">
            <button type="button" onclick="clearFieldsAndResults()" class="cancel-btn">ยกเลิก</button>
        </div> <!-- Button to clear input fields and results -->
    </form>
</div>
    </form>
</div> -->

<div id="searchResults">
<?php
// ตรวจสอบว่ากรอกข้อมูลครบทุกช่องแล้วหรืออย่างน้อย 1 ช่องไม่ว่างเปล่า
if(empty($_GET['alumni_name']) && empty($_GET['alumni_surname']) && empty($_GET['education_branch'])) {
    echo '<div style="display: flex; justify-content: center; margin-top: 20px;">'; // Opening flex container div with center alignment
    echo '<h3 style="text-align: center; color: #ffffff;">*กรุณากรอกข้อมูลให้ครบทุกช่อง*</h3>'; // Message for incomplete data
    echo '</div>'; // Closing flex container div
} elseif (empty($_GET['alumni_name']) || empty($_GET['alumni_surname']) || empty($_GET['education_branch'])) {
    echo '<div style="display: flex; justify-content: center; margin-top: 20px;">'; // Opening flex container div with center alignment
    echo '<h3 style="text-align: center; color: #ffffff;">*กรุณากรอกข้อมูลให้ครบทุกช่อง*</h3>'; // Message for incomplete data
    echo '</div>'; // Closing flex container div
} else {
    // การเชื่อมต่อฐานข้อมูล
    $servername = "localhost";
    $username = "root"; // Your MySQL username
    $password = "123456"; // Your MySQL password
    $dbname = "projectend"; // Your database name

    // สร้างการเชื่อมต่อ
    $conn = new mysqli($servername, $username, $password, $dbname);

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Search parameters
    $name = $_GET['alumni_name'];
    $surname = $_GET['alumni_surname'];
    $study_step = $_GET['education_branch'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM tbl_appeople WHERE alumni_name LIKE ? AND alumni_surname LIKE ? AND education_branch = ?");
    $name = "%$name%";
    $surname = "%$surname%";
    $stmt->bind_param("sss", $name, $surname, $study_step);

    // ดำเนินการคำสั่ง
    $stmt->execute();
    $result = $stmt->get_result();

    // เริ่มต้นการตั้งค่าสถานะเพื่อตรวจสอบว่าพบข้อมูลที่ตรงกันหรือไม่
    $matching_info_found = false;

    // ตรวจสอบว่าพบผลลัพธ์หรือไม่
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // ตรวจสอบว่าพารามิเตอร์การค้นหาตรงกับข้อมูลที่ดึงมาหรือไม่
            if ($row["alumni_name"] === $_GET['alumni_name'] && $row["alumni_surname"] === $_GET['alumni_surname'] && $row["education_branch"] === $_GET['education_branch']) {
                echo '<div style="display: flex; justify-content: center;">'; // Opening flex container div with center alignment
                echo '<div class="result-item">';
                echo '<div class="card" style="border: 3px solid #3b50ce; padding: 40px; background-color: #e7e9fd;">'; // Opening card div with green border color, specified width, and background color
                echo '<div class="card-body">'; // Opening card body div
                echo '<h3 class="card-title">สวัสดีค่ะ คุณ ' . htmlspecialchars($row["alumni_name"]) . ' ' . htmlspecialchars($row["alumni_surname"]) . '</h3>';
                echo '<p class="card-text">รหัสนักศึกษา : ' . htmlspecialchars($row["alumni_id"]) . '</p>';
                echo '<p class="card-text">ปีที่จบการศึกษา : ' . htmlspecialchars($row["alumni_year"]) . '</p>';
                echo '<p class="card-text">รุ่นที่จบการศึกษา : ' . htmlspecialchars($row["alumni_no"]) . '</p>';
                echo '<button class="register-btn" onclick="window.location.href=\'register.php?ID=' . htmlspecialchars($row["no_id"]) . '\'">ลงทะเบียน</button>'; // Center the button
                echo '</div>'; // Closing card body div
                echo '</div>'; // Closing card div
                echo '</div>'; // Closing result-item div
                echo '</div>'; // Closing flex container div        
                $matching_info_found = true;
            }
        }
    } 
    // ปิดคำสั่งและการเชื่อมต่อ
    $stmt->close();
    $conn->close();

    // ตรวจสอบว่าไม่พบข้อมูลที่ตรงกัน
    if (!$matching_info_found) {
        echo '<div style="display: flex; justify-content: center; margin-top: 20px;">'; // Opening flex container div with center alignment
        echo '<h3 style="text-align: center; color: #ffffff;">*ไม่พบข้อมูล กรุณาติดต่อเจ้าหน้าที่*</h3>'; // Message for no matching data
        echo '</div>'; // Closing flex container div
    }
}
?>
        </div>
    <br>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


