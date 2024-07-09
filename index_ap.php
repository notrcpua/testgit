<?php
session_start();
if (isset($_SESSION['users_id'])) {
	// echo $_SESSION['users_name'];
} else {
	// if not loged in , Redirect to login
	echo "<script> window.location = 'login.php';</script>";
}

?>

<!DOCTYPE html>



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
</head>

<style>
	.header-blue {
		background-color: #FFFAFA;
		padding-bottom: 80px;
		font-family: 'Source Sans Pro', sans-serif;
	}

	a {
		text-decoration: none;
	}
</style>

<?php

function includeWithVariables($filePath, $variables = array(), $print = true)
{
	$output = NULL;
	if (file_exists($filePath)) {
		// Extract the variables to a local namespace
		extract($variables);

		// Start output buffering
		ob_start();

		// Include the template file
		include $filePath;

		// End buffering and return its contents
		$output = ob_get_clean();
	}
	if ($print) {
		print $output;
	}
	return $output;
}

?>

<body class="hold-transition skin-blue sidebar-mini header-blue" id="page-top">

	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container px-4 px-lg-8">
			<a href="#page-top">
				<h4><img src="./img/logo1.png" alt="" width="50" height="50">แปลงใหญ่ส้มสีทอง</h4>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto my-2 my-lg-0">
					<li class="nav-item"><a href="index.php">
							<h4>หน้าเเรก</h4>
						</a></li>
					<li class="nav-item"><a class="nav-link" href="#services"></a></li>
					<div class="text-center">

						<li class="nav-item">
							<a class="" href="logout.php">
								<i class="bi bi-box-arrow-right"></i>
								ออกจากระบบ
							</a>
						</li>

					</div>
				</ul>
			</div>
		</div>
	</nav>

	<br><br><br><br><br><br>


	<div class="container-fluid">
		<header class="main-header">
			<!-- Logo -->
			<?php error_reporting(error_reporting() & ~E_NOTICE); ?>
			<!-- Header Navbar: style can be found in header.less -->
			<section class="content-header">
				<div class="col-sm-9 offset-sm-3 col-md-12 offset-md-0 text-center align-self-center">
					<h2>
						รายงานแสดงข้อมูลเกษตรกร เเปลงใหญ่ส้มสีทอง
					</h2>
				</div>

			</section>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<br>

		<div class="box-body text-center" class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
			<div class="col-sm-9 offset-sm-3 col-md-12 offset-md-0 text-center align-self-center">
				<?php

				isset($_GET['act']) ? $act = $_GET['act'] : $act = "";
				if ($act == 'add') {
					include('type_appeople_form_add.php');
				} elseif ($act == 'edit') {
					$appeople_id = $_GET["ID"];

					includeWithVariables('index_ap_form_edit.php', array('appeopleID' => $appeople_id));
				} else {
					include('list_ap.php');
				}


				?>


			</div>
		</div>
	</div>




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