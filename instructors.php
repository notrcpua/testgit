<?php
error_reporting(error_reporting() & ~E_NOTICE);
include("condb.php");

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
    
  </head>

  <style>
    
:root{
    --dark-color:#2a36b1;
    --font-light:#ffffff;
    --font-dark:#e7e9fd;
    --light-color:rgba(30,100,300,0.90);
}

*{

    padding: 0;
    margin: 0;
    font-family: 'Share Tech Mono', monospace;
}
body{
    background-color: black;
    height: 1500px;
}
h1 {
    font-size: 30px;
}
h3 {
  font-size: 35px;
  color: #ffb300;
}
#Profile {
    background-color: var(--light-color);
    color: var(--font-light);
    border-radius: 5px;
    transition: 666ms;
}
#Profile img {
    height: 250px;
    margin: auto;
    display: block;
    border: 1px solid black;
    border-radius: 5px;
}
#Profile h1 {
    color: var(--font-dark);
}
@media only screen and (max-width: 575px) {
    .skill button {
        display:  block;
        width: 200px;
        margin: auto;
    }
    .skill a {
        text-decoration: none;
    }
}

canvas {
    display:block;
    position: fixed;
    z-index: -100;
    background-repeat: repeat-y;

}

.section-box{
    background-color: var(--light-color);
    color: var(--font-light) ;
    border-radius: 5px;
    transition: 666ms;
}
.section-box p {
    font-size: 25px;
}
.section-box h1 {
    color: var(--font-dark);
}
.val{
    float: right;
}
.section-box:hover{
    background-color: var(--dark-color);
    color: var(--font-light) ;
    border-radius: 5px;
}
#Profile:hover{
    background-color: var(--dark-color);
}

button {
    --green: #1BFD9C;
    font-size: 15px;
    padding: 0.7em 2.7em;
    letter-spacing: 0.08em;
    position: relative;
    border-radius: 0.6em;
    overflow: hidden;
    transition: all 0.4s;
    line-height: 1.4em;
    border: 2px solid var(--green);
    background: linear-gradient(to right, rgba(27, 253, 156, 0.1) 1%, transparent 40%,transparent 60% , rgba(27, 253, 156, 0.1) 100%);
    color: var(--green);
    box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.4), 0 0 9px 3px rgba(27, 253, 156, 0.1);
}

button:hover {
    color: #82ffc9;
    box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.6), 0 0 9px 3px rgba(27, 253, 156, 0.2);
}

button:before {
    content: "";
    position: absolute;
    left: -4em;
    width: 4em;
    height: 100%;
    top: 0;
    transition: transform .4s ease-in-out;
    background: linear-gradient(to right, transparent 1%, rgba(27, 253, 156, 0.1) 40%,rgba(27, 253, 156, 0.1) 60% , transparent 100%);
}

button:hover:before {
    transform: translateX(15em);
}

#Education span {
    color: black;

}
a{
    text-decoration: none;
}
#bgLinks {
    width: 100%;
    background-color: black;
    height: 300px;
}

    body {
    padding-top: 85px; /* Adjust this value to match the height of your navbar */
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
.row .col-lg-40 {
    width: auto; /* ปรับความกว้างของคอลัมน์ให้เหมาะสม */
}
h6 {
  font-size: 16.5px;
  color: var(--font-light);
  margin-left: -38px; /* เลื่อน h6 ไปด้านหน้าจากด้านซ้าย 20px */

}
p {
  font-size: 25px;
  color: var(--font-light);
  

}
.margin-top {
    margin-left: -5px;
    margin-top: 100px; /* Adjust the value as needed */
}
.margin-top1{
    margin-left: -5px;
    margin-top: 50px; /* Adjust the value as needed */
}

    </style>

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
                <a href="instructors.php" class="nav-item nav-link active">บุคลากร</a>
                <a href="course.php" class="nav-item nav-link ">หลักสูตรการศึกษา</a>
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
        </div>
    </nav>
</body>
    <script>
        window.addEventListener('load', (event) => {
            let prelodeElement = document.getElementById("preloder");
            prelodeElement.remove()
            // console.log('page is fully loaded');
        });
    </script>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<body>
<!--matrix-->
<canvas id="c"></canvas>
<script src="assets/script1.js"></script>
<!--matrix-->
<?php
    $sql_abouts= "SELECT * FROM instructors ORDER BY instructor_id DESC  ";  //เรียกข้อมูลมาแสดงทั้งหมด
    $result_abouts = mysqli_query($conn, $sql_abouts);
    ?>
<!-- Profile -->
<section id="Profile" class="container mt-5">
    <div>
        <div class="section-title p-4">
            <h1>ข้อมูลบุคลากรหลักสูตรวิทยาการคอมพิวเตอร์</h1>
            <hr>
        </div>

        <?php
            $i = 1;
            while ($row_abouts = mysqli_fetch_array($result_abouts)) {
        ?>
        <div class="row mb-5">
            <div class="col-lg-3 margin-top1">
                <img src="./backend/instructors_img/<?php echo $row_abouts['photo'] ?>" class="img-fluid p-3 mb-5" alt="Profile">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content margin-top">
                <h3><?php echo $row_abouts['name_i']; ?></h3>
                <p class="italic">
                    <?php echo $row_abouts['position']; ?>
                </p>
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <h6><i class="bi bi-chevron-right"></i> <strong>คุณวุฒิ (สาขาวิชา):</strong> <span><?php echo $row_abouts['qualification']; ?></span></h6>
                            <h6><i class="bi bi-chevron-right"></i> <strong>อีเมล:</strong> <span><?php echo $row_abouts['email']; ?></span></h6>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <hr>
        <?php 
            $i++;
            } 
        ?>
    </div>
</section>

<!--Profile End-->
</body>
</html>


<body>
  <footer class="footer" style="margin-top: 70px;">
    <div class="container row">
      <div class="footer-col" >
        <h4>Contact Info</h4>
        <ul>
        <li><a href=""><i class="bi bi-house"></i> มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา น่าน</a></li>
        <li><a href="#"><i class="bi bi-telephone"></i> 0 5392 1444</a></li>
        <li><a href="#"><i class="bi bi-envelope"></i> compscirmutlnan@gmail.com</a></li>
        <li><a href="https://nan.rmutl.ac.th/"><i class="bi bi-globe"></i> nan.rmutl.ac.th</a></li>
        </ul>
      </div>
      
      <div class="footer-col ">
        <h4>follow us</h4>
        <div class="social-links">
        <a href="https://www.facebook.com/computersciencermutlnan?locale=th_TH"><i class="bi bi-facebook"></i></a>

        </div>
      </div>
    </div>
  </footer>
</body>

