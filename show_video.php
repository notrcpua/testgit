<?php
error_reporting(error_reporting() & ~E_NOTICE);
include("condb.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</title>
    <!-- Favicon-->
    <link rel="icon" href="cs.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/cs.ico" type="image/x-icon">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css1/style.css" rel="stylesheet">


    <style type="text/css">
        div#mylayout_1 {
            display: block;
            width: 500px border:50 solid #09C;
            background-color: #;
        }

        div#mylayout_2 {
            display: block;
            width: 500 border:50px solid #;
            background-color: #;
            word-wrap: break-word;
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
        }

        .zoom {
            padding: 50px;
            transition: transform .2s;
            width: 400px;
            height: 400px;
            margin: 0 auto;
        }

        .zoom:hover {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.4);
        }

        .bc {
            background-color: #FFFAF0;
        }

        /* .img{
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    } */

        .banner {
            background: #FFFAFA;
        }
    </style>

    <style type="text/css">
        div#mylayout_1 {
            display: block;
            width: 500px border:50 solid #09C;
            background-color: #;
        }

        div#mylayout_2 {
            display: block;
            width: 500 border:50px solid #;
            background-color: #;
            word-wrap: break-word;
        }
        a {
        text-decoration: none;
    }
    body {
    padding-top: 70px; /* Adjust this value to match the height of your navbar */
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
            <h4 class="m-0 text-uppercase text-primary"><img src="./img/cs.png" alt="" width="80" height="50"></i>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4 border-end border-5 border-primary">
                <a href="index.php" class="nav-item nav-link ">หน้าแรก</a>
                <a href="instructors.php" class="nav-item nav-link ">บุคลากร</a>
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



    <!-- Services Section Begin -->


    <br><br><br><br><br><br>
    <h2 class="text-center mt-0">วิดีโอประชาสัมพันธ์</h2>
    <hr class="divider" style="background-color: blue;" />

    <?php
    $sql_abouts = "SELECT * FROM new_video_tbl ORDER BY video_id DESC  ";  //เรียกข้อมูลมาแสดงทั้งหมด
    $result_abouts = mysqli_query($conn, $sql_abouts);
    ?>

    <section class="services-section spad">
        <div class="container">
            <div class="row">


                <?php
                $i = 1;
                while ($row_abouts = mysqli_fetch_array($result_abouts)) {
                    //echo $row_news['new_pic']."<br>";
                    if ($i == 1) {
                ?>
                        <div class="col-lg-3 col-md-5 col-sm-6 text-center">
                            <div class="services-item bg-white rounded shadow-sm">
                            <img width="250" height="250" src="./backend/new_video/<?php echo $row_abouts['video_link'] ?> ">
                                <!-- <h5><a style="color: #A2640B" href="prd2.php?id=<?php echo $row_abouts[0]; ?>"><?php echo $row_abouts['about_topic']; ?></a></h5> -->
                            </div>
                            
                        </div>

                    <?php } else { ?>
                        <div class="col-lg-3 col-md-5 col-sm-6 text-center">
                            <div class="services-item bg-white rounded shadow-sm">
                            <img width="250" height="250" src="./backend/new_video/<?php echo $row_abouts['video_link'] ?> ">
                                <!-- <h5><a style="color: #A2640B" href="prd2.php?id=<?php echo $row_abouts[0]; ?>"><?php echo $row_abouts['about_topic']; ?></a></h5> -->
                            </div>
                        </div>
                        
                <?php }
                    $i++;
                } ?>


    </section>

    
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







    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>