<?php
error_reporting(error_reporting() & ~E_NOTICE);
include("condb.php");



?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</title>
    <!-- Favicon-->
    <link rel="icon" href="cs.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/cs.ico" type="image/x-icon">
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css1/hea.css" rel="stylesheet">
<!--TITLE-->
<title>Title Here</title>


<style>

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

*,html{
scroll-behavior: smooth;
}

*, *:after, *:before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

:root{
scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
scrollbar-width: thin !important;
--white:#fff;
--black:#000;
--dark:#2a2a2e;
--yellow:#f7b500;
--darkyellow:#f79300;
--red:#fe3e30;
--darkred:#f72729;
--blue:#2588cf;
--darkblue:#026dbe;
--defaultfont:'Poppins', sans-serif;
--titlefont:'Roboto', sans-serif;
}

::-webkit-scrollbar {
height: 12px;
width: 6px;
background: var(--dark);
}

::-webkit-scrollbar-thumb {
background: var(--dark);
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}

::-webkit-scrollbar-corner {
background: var(--dark);
}


/********************************
          DEFAULT
*********************************/
body{
margin:0;
overflow-x:hidden !important;
font-family:var(--defaultfont);
}

a{
text-decoration:none;
color:inherit;
}

a, button, input, select, p{
outline:none !important;
transition:0.5s;
} 

em{
font-style:normal;
color:var(--primary);
}

p{
line-height:1.6em;
font-size:14px;
color:rgba(1,1,1,0.7);
}

img{
max-width:100%;
}

figure{
margin:0;
padding:0;
}

fieldset{
width:100%;
border:0;
padding:0;
margin:0;
}

.title{
font-family:var(--titlefont);
}

.btn1, .btn2{
padding:1rem 2rem;
border-radius:10px;
text-align:center;
border:0;
}

.btn1{
background-color:var(--yellow);
color:var(--white);
}

.btn1:hover{
background-color:var(--darkyellow);
}

.btn2{
background-color:var(--red);
color:var(--white);
}

.btn2:hover{
background-color:var(--darkred);
}




/********************************
          HEADER
*********************************/
header{
width:100%;
display:flex;
align-items:center;
justify-content:center;
background-size:cover;
background-repeat:no-repeat;
}

header section{
width:auto;
padding:8rem 1rem;
position:relative;
color:var(--white);
}

header section:after{
content:"";
position:absolute;
/* background-color:var(--yellow); */
height:4px;
width:100px;
left:50%;
transform:translate(-50%, 0);
}

header section .title{
font-size:3em;
line-height:0;
}

header section span{
position:absolute;
bottom:0;
left:50%;
transform:translate(-50%, 0);
background-color:var(--yellow);
padding:10px 20px;
border-radius:10px 10px 0 0;
white-space:nowrap;
}

header a:hover{
color:var(--dark);
}

header .active{
color:var(--dark);
pointer-events:none;
}

@media (max-width:1000px){
header section .title{
font-size:1.5em;
line-height:0.8;
}
}






/********************************
        BLOG CONTAINER
*********************************/
.blog_container{
width:100%;
display:flex;
align-items:top;
background-color:#f1f1f1;
}

/*BLOG LEFT CONTENT*/
.blog_content{
padding:2rem;
width:100%;
}

.blog_content .load-btn{
display:block;
width:150px;
margin:5vh auto;
}

.left_content{
display:flex;
align-items:top;
justify-content: space-between;
flex-wrap:wrap;
column-count: 2;
gap: 20px 10px;
flex:0 0 70%;
}

.right_content{
flex:0 0 30%;
}

.blog_card{
width:100%;
flex:0 0 48.5%;
overflow:hidden;
background-color:var(--white);
}

.blog_card:nth-child(1){
flex:0 0 100%;
}

.blog_card .figure{
display:block;
width:100%;
height:200px;
position:relative;
overflow:hidden;
}

.blog_card:nth-child(1) .figure{
height:300px;
}

.blog_card .figure img{
width:100%;
height:100%;
object-fit:cover;
transition:0.5s;
}

.blog_card .tag{
padding:5px 10px;
background-color:var(--yellow);
color:var(--white);
position:absolute;
right:1%;
top:3%;
font-size:12px;
}

.blog_card section{
padding:1rem;
position:relative;
background-color:var(--white);
}

.blog_card section .title{
font-weight:600;
font-size:18px;
color:var(--dark);
width:auto;
}

.blog_card section a:hover{
color:var(--yellow);
}

.blog_card:hover > .figure img{
transform:scale(1.1);
}

.share_icon{
position:absolute;
bottom:-30px;
left:10px;
background-color:var(--red);
color:var(--white);
display:flex;
align-items:center;
padding-right:5px;
font-size:13px;
cursor:pointer;
transition:0.5s;
}

.share_icon .fa{
padding:5px;
background-color:var(--darkred);
margin-right:10px;
}

.blog_card section img{
width:30%;
margin-right:20px;
object-fit:cover;
border:5px solid rgba(1,1,1,0.1);
}

.blog_card section img:nth-child(even){
float:left;
}

.blog_card section img:nth-child(odd){
float:right;
}




/*BLOG RIGHT CONTENT*/
.columns{
display:block;
margin-bottom:4vh;
background-color:var(--white);
}

.columns section{
padding:1rem;
}

.columns .title{
background-color:var(--yellow);
color:var(--white);
padding:1rem;
text-align:left;
width:100%;
display:block;
transition:0.2s;
border-left:0px solid var(--dark);
}

.columns:hover > .title{
border-left:5px solid var(--dark);
}

.columns .title a{
float:right;
}

.columns .title a:hover{
color:var(--dark);
}

.search form{
width:90%;
display:flex;
align-items:center;
}

.search fieldset:nth-child(2){
width:10%;
}

.search form input{
border:1px solid rgba(1,1,1,0.1);
padding:1rem;
width:100%;
font-weight:600;
color:rgba(1,1,1,0.5);
}

.search .btn1{
border:1px solid var(--yellow);
border-radius:0;
}



/*BOOKS*/
.books .cards {
position: relative;
width: 100%;
height:46vh;
overflow: hidden;
border-radius: 5px;
background-color:#f1f1f1;
}

.books .cards::after {
content: '';
position: absolute;
left: 0;
top: 0;
z-index: 900;
display: block;
width: 100%;
height: 100%;
}

.books .card_part {
position: absolute;
top: 0;
left: 0;
z-index: 7;
display: flex;
align-items: center;
width: 100%;
height: 100%;
background-size:100% 100%;
background-position:center;
transform: translateX( 700px );
background-repeat:no-repeat;
animation: opaqTransition 28s cubic-bezier(0, 0, 0, 0.97) infinite;
background-color:#f1f1f1;
}

.books .card_part.card_part-two {
z-index: 6;
animation-delay: 7s;
background-repeat:no-repeat;
}

.books .card_part.card_part-three {
z-index: 5;
animation-delay: 14s;
background-repeat:no-repeat;
}

.books .card_part.card_part-four {
z-index: 4;
animation-delay: 21s;
background-repeat:no-repeat;
}

@keyframes opaqTransition {
3% { transform: translateX( 0 ); }
25% { transform: translateX( 0 ); }
28% { transform: translateX( -700px ); }
100% { transform: translateX( -700px ); }
}




/*CATEGORIES*/
.categories a{
display:inline-block;
padding:0.2rem 1rem;
border-radius:40px;
background-color:rgba(1,1,1,0.3);
margin:5px 3px;
font-size:12px;
white-space:nowrap;
color:var(--white);
}

.categories a:hover{
background-color:var(--dark);
}


/*POSTS*/
.posts a{
display:flex;
align-items:center;
margin:0.4rem 0;
}

.posts a img{
width:100px;
margin-right:10px;
}

.posts a:hover > p{
color:var(--black);
}



/*COMMENTS*/
.comments{
position:relative;
overflow:hidden;
max-height:60vh;
}

.marquee2 {
position: relative;
overflow:hidden;
line-height:1.6em;
}

.marquee2 p{
border-bottom:1px solid rgba(1,1,1,0.1);
position:relative;
padding:0.4rem 0;
}

.marquee2 p:before{
content:"\f10d";
font-family:"FontAwesome";
margin-right:5px;
position:relative;
top:-5px;
}

@keyframes marquee1 {
0% {
top: 10%;
}
100% {
top: -100%;
}
}


/*SOCIAL MEDIA*/
.social_icons{
display:flex;
align-items:center;
justify-content:center;
column-gap: 15px;
background-color:transparent;
}

.social_icons .fa{
padding:7px 13px;
background-color:#f1f1f1;
color:var(--white);
transition:0.2s;
}

.social_icons a:hover > .fa{
transform:scale(1.1);
}

.social_icons .fa-facebook{
background-color:#3b5998;
}

.social_icons .fa-instagram{
background-color:#fb3958;
}

.social_icons .fa-youtube{
background-color:#c4302b;
}

.social_icons .fa-whatsapp{
background-color:#25d366;
}

.social_icons .fa-telegram{
background-color:#3399ff;
}


@media (max-width:1000px){
.blog_container{
flex-wrap:wrap;
}
.blog_content{
padding:0;
order:2;
}
.left_content{
flex:0 0 100%;
order:2;
padding:1rem;
}
.right_content{
flex:0 0 100%;
order:1;
padding:1rem;
}
.books,.posts, .comments, .categories{
display:inline-block;
width:47%;
margin:1.3%;
margin-bottom:0;
vertical-align:top;
height:63vh;
}
.posts{
overflow-y:auto;
}
.right_content{
flex:0 0 100%;
}
}

@media (max-width:740px){
.blog_card{
flex:0 0 100%;
}
.posts, .comments, .books, .categories{
width:100%;
margin:0;
height:auto;
margin-bottom:4vh;
}
}






/*REMOVE THIS*/
.credits{
position:fixed;
right:0;
bottom:2%;
background-color:#1e1e1e;
padding:0.5rem;
font-size:12px;
z-index:999;
color:rgba(255,255,255,0.7);
}

.credits a{
color:rgba(255,255,255,0.7);
}

.credits a:hover{
color:white;
}

.credits .btn0{
background-color:white;
color:#000;
padding:5px;
border-radius:5px;
border:0;
display:block;
margin:1vh auto;
width:100px;
text-align:Center;
}

.credits .btn0:hover{
color:black;
background-color:#b8bca7;
}



</style>


<!--SHORTCUT ICON-->
<link rel="shortcut icon" href="../images/favicon.icon">

<!--META TAGS-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<!--FONTAWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<!--STYLE SHEET-->
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="css/blog.css">

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
                <a href="index.php" class="nav-item nav-link active">หน้าแรก</a>
                <a href="instructors.php" class="nav-item nav-link">บุคลากร</a>
                <a href="course.php" class="nav-item nav-link">หลักสูตรการศึกษา</a>
                <a href="search.php" class="nav-item nav-link">ลงทะเบียนศิษย์เก่า</a>
            </div>
            <div class="d-none d-lg-flex align-items-center ps-4" >
            <i class="fa fa-2x fa-sign-in-alt text-secondary me-3"></i>
                <div>
                    <h6 class="text-light m-0"><a href="login.php">เข้าสู่ระบบ</a></h6>
        
                </div>
            </div>
        </div>
    </nav>



<!--HEADER-->
<header style="background-image: url('img/header1.jpg');">

<section>
<span><a href="/PRABHUPADAWORLD/">Home</a> <i class=""></i> <a href="#" class="active"></a></span>
</section>
</header>



<!--BLOG SECTION-->
<div class="blog_container">
<div class="blog_content">
<div class="left_content">


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


    <?php
    $sql_abouts = "SELECT * FROM about_tbl ORDER BY about_id DESC  ";  //เรียกข้อมูลมาแสดงทั้งหมด
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
                        <div class="blog_card">
                            <div class="services-item bg-white rounded shadow-sm">
                                <img width="250" height="250" src="./backend/about_img/<?php echo $row_abouts['about_pic'] ?> " class="img-fluid card-img-top">
                                <h5><a style="color: #A2640B" href="prd2.php?id=<?php echo $row_abouts[0]; ?>"><?php echo $row_abouts['about_topic']; ?></a></h5></a>
                                <div id="mylayout_2">
                                    <p><?php echo $row_abouts['about_text'] ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } else { ?>
                        <div class="blog_card">
                            <div class="services-item bg-white rounded shadow-sm">
                                <img width="250" height="250" src="./backend/about_img/<?php echo $row_abouts['about_pic'] ?> " class="img card-img-top">
                                <h5><a style="color: #A2640B" href="prd2.php?id=<?php echo $row_abouts[0]; ?>"><?php echo $row_abouts['about_topic']; ?></a></h5>
                                <div id="mylayout_2">
                                    <p><?php echo $row_abouts['about_text'] ?></p>
                                </div>
                            </div>
                        </div>
                <?php }
                    $i++;
                } ?>


    </section>


<!--CARD ENDS-->
</div>
<a href="show_about_all.php">
<button class="btn1 load-btn">Load more</button>
</a>
</div>

<div class="blog_content right_content">
<!--SEARCH COLUMN BEGINING-->
<div class="columns search_column">
<section class="search">
<form>
<fieldset><input type="text" name="search" placeholder="Search..." maxlength="100" required=""></fieldset>
<fieldset><button type="submit" class="btn1"><i class="fa fa-search"></i></button></fieldset>
</form>
</section>
</div>
<!--SEARCH COLUMN ENDS-->
<!--BOOKS COLUMN BEGINING-->



<div class="columns books">
<span class="title">ภาพกิจกรรม<a href="#" title="Explore More"><i class="fa fa-share"></i></a></span>
<section>







<div class="cards">
<?php
$sql_abouts = "SELECT * FROM new_video_tbl ORDER BY video_id DESC";  // Query to fetch all rows
$result_abouts = mysqli_query($conn, $sql_abouts);

// Check if there are any results
if (mysqli_num_rows($result_abouts) > 0) {
    // Initialize an array to store all video links
    $video_links = array();

    // Fetch all video links into the array
    while ($row_abouts = mysqli_fetch_array($result_abouts)) {
        $video_links[] = $row_abouts['video_link'];
    }
    
    // Ensure $video_links has at least 4 elements (or however many you need)
    $video_links = array_pad($video_links, 4, ''); // Pad array to ensure at least 4 elements

    // Output HTML using the video links
    ?>
    <div class="card_part card_part-one" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[0], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[0], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="card_part card_part-two" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[1], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[1], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="card_part card_part-three" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[2], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[2], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="card_part card_part-four" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[3], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[3], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="card_part card_part-four" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[3], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[4], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="card_part card_part-four" style="background-image: url('./backend/new_video/<?php echo htmlspecialchars($video_links[3], ENT_QUOTES, 'UTF-8'); ?>');">
        <img width="250" height="250" src="./backend/new_video/<?php echo htmlspecialchars($video_links[5], ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <?php 
} else { 
    
    return;

}
?>


<!-- <div class="card_part card_part-four" style="background-image: ;"></div>
<div class="card_part card_part-four" style="background-image: ;"></div> -->
</div>
</section>
</div>













<!--BOOKS COLUMN ENDS-->
<!--CATEGORIES COLUMN BEGINING-->
<div class="columns categories">
<span class="title">รายงานเเสดงข้อมูลศิษย์เก่า</span>
<section>
<a href="backend/dashboard22.php" style="font-size: 14px;">รายงานภาวะการมีงานทำศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์</a>
<a href="backend/dashboard33.php" style="font-size: 14px;">รายงานข้อมูลศิษย์เก่าหลักสูตรวิทยาการคอมพิวเตอร์        </a> 
</section>
</div>


<!--insert video-->










<!--insert video-->



<!--COMMENTS COLUMN BEGINING-->
<div class="columns comments">
<span class="title"> ปรัชญาของหลักสูตร <a href="#" title="Explore More"><i class="fa fa-share"></i></a></span>
<section>
<marquee direction="up" scrollamount="4" onMouseOver="this.stop()" onMouseOut="this.start()" class="marquee2">
<p>สร้างบัณฑิต ให้มีปัญญา นำความรู้ไปแก้ปัญหาอย่างเป็นระบบ มีคุณธรรม จริยธรรม</p> 
<p>รอบรู้ทันต่อการเปลี่ยนแปลงของเทคโนโลยี</p>
<p>ค้นคว้าวิจัยหาองค์ความรู้เพื่อจะนำมาซึ่งเทคโนโลยีและนวัตกรรมใหม่ที่จะเป็นประโยชน์ต่อการพัฒนาชุมชน สังคม และประเทศชาติ</p>
</marquee>
</section>
</div>
<!--COMMENTS COLUMN ENDS-->
<!--SOCIAL MEDIA ICONS BEGINING-->
<div class="columns social_icons">
<a href="https://www.facebook.com/computersciencermutlnan" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
<a href="#" title="Youtube"><i class="fa fa-youtube"></i></a>
<a href="#" title="Whatsapp"><i class="fa fa-whatsapp"></i></a>
<a href="#" title="Telegram"><i class="fa fa-telegram"></i></a>
</div>
<!--SOCIAL MEDIA ICONS ENDS-->
</div>
</div>
  
  
 
<!--REMOVE THIS-->
<!-- <div class="credits">
<b>Figma Design: </b><a href="https://www.figma.com/file/GeEaxbJudYCKI2tX5K5rHc/Xcelonline?node-id=0%3A1" title="Figma" target="_blank">Click_Here</a> -->
</div>
</body>
</html>

