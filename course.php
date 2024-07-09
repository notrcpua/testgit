<?php
error_reporting(error_reporting() & ~E_NOTICE);
include("condb.php");

function replace_numbers_with_newlines($text) {
    $text = preg_replace('/(\d+\.\s)/', "\n$1", $text);
    return $text;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css1/style.css" rel="stylesheet">
    <style>
        form label {
            color: #000; /* เปลี่ยนสีตัวหนังสือในฟอร์มเป็นสีดำ */
        }
        body {
            margin: 0;
            padding: 0;
            background: #fff;
        }
        header #title {
            color: #000;
            margin-bottom: 40px;
            text-align: center;
            font-weight: 400;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
        }
        main {
            background: #fff;
            opacity: 0.9;
            width: 80vw;
            margin: auto;
            padding: 1em 2em;
            border-radius: 10px;
            box-shadow: 0 5px 8px 4px rgba(40, 40, 40, 0.5);
            display: grid;
            grid-template-areas: "description" "form";
            grid-gap: 1em;
        }
        #description {
            font-size: 18px;
            grid-area: "description";
            text-transform: uppercase;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }
        #survey-form {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: repeat(6, auto);
            grid-gap: 1em;
        }
        #submit {
            width: 100%;
            padding: 0.8em;
            grid-area: submit;
        }
        label {
        grid-column: 1/2;
        display: flex;
        align-items: flex-start; /* จัดให้สมาชิกอยู่ที่ขอบบนของ flex container */
        margin-top: 5px; /* หรือใช้ margin-top ในกรณีที่ต้องการขยับลงมาทีหลัง */
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
    }

        
        .scholarship {
            display: unset;
            align-content: unset;
        }
        input[type="radio"] {
            position: relative;
            top: 1.5px;
        }
        input, select, textarea {
            padding: 5px;
        }
        input[type="text"], input[type="email"], input[type="number"], select, textarea, .checkboxes {
            grid-column: 2/3;
        }
        textarea {
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
            font-size: 16px;
        }
        input[type="checkbox"] {
            position: relative;
            top: 1px;
            margin: 5px;
        }
        body {
            padding-top: 120px; /* Adjust this value to match the height of your navbar */
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
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0 fixed-top">
    <a href="index.php" class="navbar-brand p-0">
        <h4 class="m-0 text-uppercase text-primary">
            <img src="./img/cs.png" alt="" width="80" height="50"> ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์
        </h4>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
            <a href="index.php" class="nav-item nav-link">หน้าแรก</a>
            <a href="instructors.php" class="nav-item nav-link">บุคลากร</a>
            <a href="course.php" class="nav-item nav-link active">หลักสูตรการศึกษา</a>
            <a href="search.php" class="nav-item nav-link">ลงทะเบียนศิษย์เก่า</a>
        </div>
        <div class="d-none d-lg-flex align-items-center ps-4">
            <i class="bi bi-box-arrow-in-right h2 text-secondary me-3"></i>
            <div>
                <h5 class="text-primary mb-1"><small>เจ้าหน้าที่</small></h5>
                <h6 class="text-light m-0"><a href="index_login2.php">เข้าสู่ระบบ</a></h6>
            </div>
        </div>
    </div>
</nav>
<header>
    <h1 id="title">ข้อมูลหลักสูตรการศึกษา</h1>
</header>
<?php
$sql = "SELECT * FROM course ORDER BY id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($conn, $sql);
?>
<main>
    <?php while($row = $result->fetch_assoc()): ?>
    <form id="survey-form">
        <label for="objective" id="objective">วัตถุประสงค์ของหลักสูตร</label>
        <p style="color: #000000; margin-top: -20px;"><?php echo nl2br(replace_numbers_with_newlines($row['objective'])); ?></p>

        <label for="qualification" id="qualification">คุณสมบัติผู้เข้าศึกษา</label>
        <p style="color: #000000; margin-top: -20px;"><?php echo nl2br(replace_numbers_with_newlines($row['qualification'])); ?></p>

        <label for="job" id="job">อาชีพที่สามารถประกอบได้หลังสำเร็จการศึกษา</label>
        <p style="color: #000000; margin-top: -20px;"><?php echo nl2br(replace_numbers_with_newlines($row['job'])); ?></p>

        <label for="time_cs" id="time_cs">ระยะเวลาของหลักสูตร</label>
        <p style="color: #000000; margin-top: 5px;"><?php echo nl2br(replace_numbers_with_newlines($row['time_cs'])); ?></p>

        <label for="pay" id="pay">ค่าใช้จ่าย</label>
        <p style="color: #000000; margin-top: 5px;"><?php echo nl2br(replace_numbers_with_newlines($row['pay'])); ?></p>

        <label for="area" id="area">คุณสมบัติพื้นที่การเรียนการสอน</label>
        <p style="color: #000000; margin-top: 5px;"><?php echo nl2br(replace_numbers_with_newlines($row['area'])); ?></p>

        <label for="file_upload" id="file_upload">ไฟล์หลักสูตร</label>
        <?php if (!empty($row['file_upload'])): ?>
            <a href="./backend/uploads/<?php echo htmlspecialchars($row['file_upload']); ?>" target="_blank">
                <img src="./img/PDF.png" style="width:40px;height:40px;">&nbsp;<?php echo htmlspecialchars($row['file_upload']); ?>
            </a>
        <?php else: ?>
            <p>ไม่มีไฟล์ที่แนบไว้</p>
        <?php endif; ?>
    </form>
    <?php endwhile ?>
</main>
<footer class="footer" style="margin-top: 70px;">
    <div class="container row">
        <div class="footer-col">
            <h4>Contact Info</h4>
            <ul>
                <li><a href=""><i class="bi bi-house"></i> มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา น่าน</a></li>
                <li><a href="#"><i class="bi bi-telephone"></i> 0 5392 1444</a></li>
                <li><a href="#"><i class="bi bi-envelope"></i> compscirmutlnan@gmail.com</a></li>
                <li><a href="https://nan.rmutl.ac.th/"><i class="bi bi-globe"></i> nan.rmutl.ac.th</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
                <a href="https://www.facebook.com/computersciencermutlnan?locale=th_TH"><i class="bi bi-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
